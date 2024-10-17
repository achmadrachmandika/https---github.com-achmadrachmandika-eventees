<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventreqdosen; // Ensure the model is correctly imported
use App\Models\Event; // Import the Event model if you have it

class EventReqDosenController extends Controller
{
    public function index()
    {
        $eventreqdosens = Eventreqdosen::all();
        return view('eventreqdosens.index', compact('eventreqdosens'));
    }

    public function create()
    {
        return view('eventreqdosens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_dosen' => 'required|unique:eventreqdosens,kode_dosen',
            'training_topic' => 'nullable',
            'no_hp' => 'required',
            'nama_dosen' => 'required',
        ]);

        // Cek apakah kode_dosen sudah digunakan dalam event
        $isUsed = Event::where('kode_dosen', $request->input('kode_dosen'))->exists();

        // Tentukan status berdasarkan apakah kode_dosen sudah digunakan atau belum
        $status = $isUsed ? 'Terealisasi' : 'Proses';

        // Save the event
        Eventreqdosen::create([
            'kode_dosen' => $request->input('kode_dosen'),
            'training_topic' => $request->input('training_topic'),
            'no_hp' => $request->input('no_hp'),
            'status' => $status,
            'nama_dosen' => $request->input('nama_dosen'),
        ]);

        return redirect()->route('eventhub')->with('success', 'Event created successfully.');
    }

    public function show(string $kode_dosen)
    {
        $eventreqdosen = Eventreqdosen::findOrFail($kode_dosen);
        return view('eventreqdosens.show', compact('eventreqdosen'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventdosen; // Ensure the model is correctly imported

class EventDosenController extends Controller
{
    public function index()
    {
        $eventdosens = Eventdosen::all();
        return view('eventdosens.index', compact('eventdosens'));
    }

    public function create()
    {
        return view('eventdosens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_dosen' => 'required|unique:eventdosens,kode_dosen',
            'training_topic' => 'nullable',
            'no_hp' => 'required',
             'nama_dosen' => 'required',
        ]);

        // Save the event
        Eventdosen::create([
            'kode_dosen' => $request->input('kode_dosen'),
            'training_topic' => $request->input('training_topic'),
            'no_hp' => $request->input('no_hp'),
              'nama_dosen' => $request->input('nama_dosen'),
        ]);

        return redirect()->route('eventhub')->with('success', 'Event created successfully.');
    }

      public function show(string $kode_dosen)
    {
        $eventdosen = Eventdosen::findOrFail($kode_dosen);
        return view('eventdosens.show', compact('eventdosen'));
    }
}

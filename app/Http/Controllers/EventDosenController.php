<?php

namespace App\Http\Controllers;

use App\Models\EventDosen; // Ensure the model is imported
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventDosenController extends Controller
{
    public function index()
    {
        $eventdosens = EventDosen::all();
        return view('eventdosens.index', compact('eventdosens'));
    }

    public function create()
    {
        return view('eventdosens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_evndsn' => 'required|unique:event_dosens,kode_evndsn', // Corrected validation rule
            'photo' => 'nullable|image|file|max:2048',
            'nama_event' => 'required|string',
            'benefits' => 'nullable|array',
            'kuota' => 'required|integer',
            'tanggal' => 'required|date',
            'jam_mulai' => 'required|string',
            'jam_pulang' => 'required|string',
            'kategori' => 'required|in:Online,Offline',
            'description' => 'required|string',
        ]);

        // Handle file upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('eventdosen_photos', 'public');
        }

        // Save the event
        
        $eventDosen = EventDosen::create([
            'kode_evndsn' => $request->input('kode_evndsn'),
            'photo' => $photoPath,
            'nama_event' => $request->input('nama_event'),
            'benefits' => $request->input('benefits'),
            'kuota' => $request->input('kuota'),
            'tanggal' => $request->input('tanggal'),
            'jam_mulai' => $request->input('jam_mulai'),
            'jam_pulang' => $request->input('jam_pulang'),
            'kategori' => $request->input('kategori'),
            'description' => $request->input('description'),
        ]);

        // Update status in Eventreqdosen to 'Terealisasi'

        return redirect()->route('eventdosens.index')->with('success', 'Event Dosen created successfully.');
    }

    public function show(string $kode_evndsn)
    {
        $eventdosen = EventDosen::findOrFail($kode_evndsn);
        return view('eventdosens.show', compact('eventdosen'));
    }

    public function edit(string $kode_evndsn)
    {
        $eventdosen = EventDosen::findOrFail($kode_evndsn);
        return view('eventdosens.edit', compact('eventdosen'));
    }

    public function update(Request $request, string $kode_evndsn)
    {
        $request->validate([
            'kode_evndsn' => 'required',
            'photo' => 'nullable|image|file|max:2048',
            'nama_event' => 'required|string',
            'benefits' => 'nullable|array',
            'kuota' => 'required|integer',
            'tanggal' => 'required|date',
            'jam_mulai' => 'required|string',
            'jam_pulang' => 'required|string',
            'kategori' => 'required|in:Online,Offline',
            'description' => 'required|string',
        ]);

        $eventdosen = EventDosen::findOrFail($kode_evndsn);

        // Handle file upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($eventdosen->photo && Storage::exists('public/' . $eventdosen->photo)) {
                Storage::delete('public/' . $eventdosen->photo);
            }
            // Store the new photo
            $eventdosen->photo = $request->file('photo')->store('eventdosen_photos', 'public');
        }

        // Update the event
        $eventdosen->update([
            'nama_event' => $request->input('nama_event'),
            'benefits' => $request->input('benefits'),
            'kuota' => $request->input('kuota'),
            'tanggal' => $request->input('tanggal'),
            'jam_mulai' => $request->input('jam_mulai'),
            'jam_pulang' => $request->input('jam_pulang'),
            'kategori' => $request->input('kategori'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('eventdosens.index')->with('success', 'Event Dosen updated successfully.');
    }

    public function destroy(string $kode_evndsn)
    {
        $eventdosen = EventDosen::findOrFail($kode_evndsn);

        // Delete old photo if exists
        if ($eventdosen->photo) {
            Storage::disk('public')->delete($eventdosen->photo);
        }

        $eventdosen->delete();

        return redirect()->route('eventdosens.index')->with('success', 'Event Dosen deleted successfully.');
    }
}

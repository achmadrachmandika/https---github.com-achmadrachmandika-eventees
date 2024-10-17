<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventDosen; // Ensure the model is correctly imported
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $events = Event::all();
    $eventdosens = EventDosen::all(); // Pastikan untuk mengambil data dari EventDosen juga
    return view('events.index', compact('events', 'eventdosens')); // Memisahkan kedua variabel dengan koma
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eventdosens = EventDosen::all();
        return view('events.create', compact('eventdosens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_event' => 'required|unique:events,kode_event',
            'kode_dosen' => 'required|exists:eventdosens,kode_dosen',
            'photo' => 'nullable|image|file|max:2048',
            'nama_event' => 'required',
            'benefits' => 'nullable|array',
            'harga' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'status' => 'required|in:Paid,Unpaid',
            'kategori' => 'required|in:Online,Offline',
            'description' => 'required',
        ]);

        // Handle file upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('event_photos', 'public');
        }

        // Save the event
        Event::create([
            'kode_event' => $request->input('kode_event'),
            'kode_dosen' => $request->input('kode_dosen'),
            'photo' => $photoPath,
            'nama_event' => $request->input('nama_event'),
            'benefits' => $request->input('benefits'),
            'harga' => $request->input('harga'),
            'tanggal' => $request->input('tanggal'),
            'jam' => $request->input('jam'),
            'kategori' => $request->input('kategori'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kode_event)
    {
        $event = Event::findOrFail($kode_event);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kode_event)
    {
        $event = Event::findOrFail($kode_event);
        $eventdosens = EventDosen::all();
        return view('events.edit', compact('event', 'eventdosens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode_event)
    {
        $request->validate([
            'kode_dosen' => 'required|exists:eventdosens,kode_dosen',
            'photo' => 'nullable|image|file|max:2048',
            'nama_event' => 'required',
            'benefits' => 'nullable|array',
            'harga' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'kategori' => 'required|in:Online,Offline',
            'status' => 'required|in:Paid,Unpaid',
            'description' => 'required',
        ]);

        $event = Event::findOrFail($kode_event);

        // Handle file upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($event->photo && Storage::exists('public/' . $event->photo)) {
                Storage::delete('public/' . $event->photo);
            }
            // Store the new photo
            $event->photo = $request->file('photo')->store('event_photos', 'public');
        }

        // Update the event
        $event->update([
            'kode_dosen' => $request->input('kode_dosen'),
            'nama_event' => $request->input('nama_event'),
            'benefits' => $request->input('benefits'),
            'harga' => $request->input('harga'),
            'tanggal' => $request->input('tanggal'),
            'jam' => $request->input('jam'),
            'kategori' => $request->input('kategori'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kode_event)
    {
        $event = Event::findOrFail($kode_event);

        // Delete old photo if exists
        if ($event->photo) {
            Storage::disk('public')->delete($event->photo);
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}

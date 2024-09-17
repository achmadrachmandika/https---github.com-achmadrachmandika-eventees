<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data event dari database
        $events = Event::all();
        // Mengembalikan tampilan dengan data event
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengembalikan tampilan untuk form pembuatan event baru
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'kode_event' => 'required|unique:events,kode_event',
        'photo' => 'image|file|max:2048',
        'nama_event' => 'required',
        'tanggal' => 'required|date',
        'description' => 'required',
    ]);

    // Handle file upload
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('event_photos', 'public');
    }

    // Menyimpan data event baru
    Event::create(array_merge($request->all(), ['photo' => $photoPath]));

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('events.index')->with('success', 'Event created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan event berdasarkan ID
        $event = Event::findOrFail($id);
        // Mengembalikan tampilan dengan data event
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Menampilkan form edit untuk event berdasarkan ID
        $event = Event::findOrFail($id);
        // Mengembalikan tampilan dengan data event
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'kode_event' => 'required|unique:events,kode_event,' . $id,
        'photo' => 'nullable|image|file|max:2048',
        'nama_event' => 'required',
        'tanggal' => 'required|date',
        'description' => 'required',
    ]);

    // Menemukan event berdasarkan ID
    $event = Event::findOrFail($id);

    // Handle file upload
    if ($request->hasFile('photo')) {
        // Delete old photo if exists
        if ($event->photo) {
            \Storage::disk('public')->delete($event->photo);
        }
        $photoPath = $request->file('photo')->store('event_photos', 'public');
        $event->photo = $photoPath;
    }

    // Memperbarui data event
    $event->update($request->except('photo'));

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('events.index')->with('success', 'Event updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Menemukan event berdasarkan ID
        $event = Event::findOrFail($id);

        // Menghapus event
        $event->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}

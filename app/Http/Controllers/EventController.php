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
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
            'benefits' => 'nullable|array', // Validate as array
            'tanggal' => 'required|date',
            'description' => 'required',
        ]);

        // Handle file upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('event_photos', 'public');
        }

        // Save the event
        Event::create(array_merge($request->all(), ['photo' => $photoPath]));

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
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode_event)
    {
        $request->validate([
            'kode_event' => 'required|unique:events,kode_event,' . $kode_event,
            'photo' => 'nullable|image|file|max:2048',
            'nama_event' => 'required',
            'tanggal' => 'required|date',
            'description' => 'required',
        ]);

        $event = Event::findOrFail($kode_event);

        // Handle file upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($event->photo) {
                \Storage::disk('public')->delete($event->photo);
            }
            $photoPath = $request->file('photo')->store('event_photos', 'public');
            $event->photo = $photoPath;
        }

        // Update the event
        $event->update($request->except('photo'));

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
            \Storage::disk('public')->delete($event->photo);
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}

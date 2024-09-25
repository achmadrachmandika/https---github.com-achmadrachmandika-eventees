<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 
use Illuminate\Support\Facades\Storage;


class EventHubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          // Ambil semua data events dari database
        $events = Event::all();
        
        // Kirim data events ke view
        return view('eventhub', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kode_event)
{
    $event = Event::where('kode_event', $kode_event)->first();
    
    // Jika event tidak ditemukan, arahkan ke halaman lain atau tampilkan pesan error
    if (!$event) {
        return redirect()->route('eventhub.index')->with('error', 'Event not found');
    }

    return view('eventhubshow', compact('event'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

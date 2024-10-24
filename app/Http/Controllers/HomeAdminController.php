<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 
use App\Models\Eventreqdosen; 
use App\Models\User; 
use App\Models\Feedback; 
use App\Models\EventDosen; 


class HomeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $event = Event::all(); // Ambil semua event
            $eventreqdosen = Eventreqdosen::all();
            $user = User::all();
            $feedbacks = Feedback::all();
            $eventdosens = EventDosen::all();
          return view ('admin.dashboard' , compact('event', 'eventreqdosen', 'user', 'feedbacks', 'eventdosens'));
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
    public function show(string $id)
    {
        //
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

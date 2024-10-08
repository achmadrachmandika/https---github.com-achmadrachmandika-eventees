<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
     public function index()
{
    // Jika pengguna memiliki peran admin, tampilkan semua feedback
    if (auth()->user()->hasRole('admin')) {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();
    } else {
        // Jika pengguna memiliki peran user, tampilkan hanya feedback miliknya
        $feedbacks = Feedback::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
    }

    return view('feedback.index', compact('feedbacks'));
}


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create([

             
            'user_id' => Auth::id(),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);
        

        return redirect()->back()->with('success', 'Terima kasih atas kritik dan saran Anda!');
    }
}


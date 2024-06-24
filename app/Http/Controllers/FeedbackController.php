<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'feedback' => 'required|string|max:1000',
        ]);

        // Store the feedback in the database or handle it as needed
        // For simplicity, let's just flash the data to the session
        // In a real application, you would store it in the database

        return back()->with('success', 'Thank you for your feedback!');
    }
}

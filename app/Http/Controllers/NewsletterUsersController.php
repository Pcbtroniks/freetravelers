<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterUsersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_users,email'
        ]);

        NewsletterUsers::create([
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', 'You have been successfully subscribed to our newsletter.');
    }
}

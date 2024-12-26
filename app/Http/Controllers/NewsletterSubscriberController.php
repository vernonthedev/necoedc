<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterSubscriberController extends Controller
{

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'nullable',
            'email' => 'required|email',
        ]);

        $subscriber = new NewsletterSubscriber();
        $subscriber->name = $validatedData['name'] ?? null;
        $subscriber->email = $validatedData['email'];


        if (!$subscriber->save()) {
            // Handle save failure
            return redirect('/')->with('error', 'Failed to save subscriber.');
        }

        return redirect('/')->with('success', 'Subscriber saved successfully.');
    }

}

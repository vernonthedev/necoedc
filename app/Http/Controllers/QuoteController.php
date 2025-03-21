<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        
        $validatedData = $request->validate([
            'name' => 'required',
            'message' => 'required',
            'email' => 'nullable|email',
        ]);

        $quote = new Quote();
        $quote->name = $validatedData['name'];
        $quote->email = $validatedData['email'];
        $quote->message = $validatedData['message'];

        if (!$quote->save()) {
            // Handle save failure
            return redirect('/')->with('error', 'Failed to Saved Quote.');
        }

        return redirect('/')->with('success', 'Quote Sent Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        //
    }
}

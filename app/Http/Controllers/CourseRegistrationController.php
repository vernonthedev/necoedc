<?php

namespace App\Http\Controllers;

use App\Models\CourseRegistration;
use Illuminate\Http\Request;

class CourseRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("courseRegister");
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
    public function show(CourseRegistration $courseRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseRegistration $courseRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseRegistration $courseRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseRegistration $courseRegistration)
    {
        //
    }
}

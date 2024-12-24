<?php

namespace App\Http\Controllers;

use App\Models\CourseRegistration;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view("courseRegister", compact("courses"));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'course_id' => 'required|exists:courses,id',
            'payment_details' => 'required|string',
            'accepted_policies' => 'required|boolean',
        ]);
    
        // Saving the registration data
        CourseRegistration::create($validatedData);
    
        return redirect()->back()->with('success', 'You have successfully applied for the course.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseRegistration $courseRegistration)
    {
        //
    }

 
    public function destroy(CourseRegistration $courseRegistration)
    {
        //
    }
}

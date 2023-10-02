<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $feedback = feedback::all();
        return view('dashboard.feedback.index', compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'message' => 'required|string|max:255',


        ]);

        feedback::create($data);

//        User::create($data);

//        return view('dashboard.feedback.index');

        return redirect()->route('feedback.index')->with('success', 'Message added successfully.');

    }

    /**
     * Display the specified resource.
     */
//    public function show(string $id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.feedback.edit', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'message' => 'required|string|max:255',


        ]);

        $feedback->update($data);

        return redirect()->route('feedback.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedback->delete();
        return redirect()->route('feedback.index')->with('success', 'Category deleted successfully.');

    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = courses::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->get();

        return view('website.courses.index', ['courses' => $results]);
    }

}

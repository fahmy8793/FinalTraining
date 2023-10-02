<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Courses;
use App\Models\User;
use App\Models\feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
//        $categories = Category::all();
//        return view('website.home.index', ['categories' => $categories]);
//        $courses = Courses::inRandomOrder()->first();


//        $courses = Courses::all()->random(1);
        $courses = Courses::with('namecategory')->take(12)->get();

        return view('website.home.index', ['courses' => $courses]);
        //return PostResource::collection($courses);
        //dd('a');


    }


    public function store(Request $request)
    {
//        dd($request->all());
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'message' => 'required|string|max:255',


        ]);
//        dd($data);


//        dd($request->all());

        feedback::create($data);

//        return view('website.home.index');

        return redirect()->route('home2')->with('success', 'Message Send successfully.');
    }

}

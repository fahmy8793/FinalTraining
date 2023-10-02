<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCoursesRequest;
use App\Models\Category;
use App\Models\Courses;
use App\Models\feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Resources\Post as PostResource;
use Carbon\Carbon;
use function App\Http\Controllers\abort;
use function App\Http\Controllers\redirect;
use function App\Http\Controllers\response;
use function App\Http\Controllers\view;


class coursesController extends Controller
{
    public function get(Request $request)
    {
        $courses = Courses::with('namecategory')->get();
        return PostResource::collection($courses);

//        $courses = new courses();
//        $courses->name = $request->input('name');
//        $courses->description = $request->input('description');
//        $courses->price - $request->input('price');

//        $courses->save();
//
        return response()->json($courses);
//        return response()->json(['message' => 'Data stored successfully'], 201);


    }


}





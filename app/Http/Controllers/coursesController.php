<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCoursesRequest;
use App\Models\booking;
use App\Models\Category;
use App\Models\Courses;
use App\Models\feedback;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Resources\Post as PostResource;
use Carbon\Carbon;



class coursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
//        $courses = Courses::all()->random(10)
        $coursesQuery = Courses::orderby('id', 'desc');
        if (request('course')) {
            $coursesQuery->where('name', 'Like', '%' . request('course') . '%');
        }
        $courses = $coursesQuery->paginate(10);

        return view('dashboard.course.index', compact('courses'));
    }


    public function create()
    {
        $categories = Category::all();

        return view('dashboard.course.create', compact('categories'));
    }

    public function store(StoreCoursesRequest $request)
    {
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            $request['photo'] = $path;
        }

        Courses::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Courses created successfully.');
    }

    public function edit(Courses $course)
    {
        $categories = Category::all();
        return view('dashboard.course.edit', compact('course', 'categories'));
    }
//public function show($filename)
//{
//    // Assuming images are stored in public/images directory
//    $path = public_path('images/' . $filename);
//
//    // Check if the image file exists
//    if (!file_exists($path)) {
//        return response()->json(['message' => 'Image not found'], 404);
//    }
//
//    // Return the image with appropriate content type and headers
//    $file = file_get_contents($path);
//    $type = mime_content_type($path);
//
//    return response($file)->header('Content-Type', $type);
//}

    public function update(StoreCoursesRequest $request, Courses $course)
    {


        if ($request->hasFile('photo')) {
//            $imageName = time().'.'.request()->image->getClientOriginalExtension();
//            request()->image->move(public_path('images'), $imageName);
            $path = $request->file('photo')->store('photos', 'public');
            $data['photo'] = $path;
        }


        $course->update($data);

        return redirect()->route('courses.index')->with('success', 'Courses updated successfully.');
    }

//    public function show ($youtubelink)
//    {
//        $path = storage_path('app/public/videos/' . $youtubelink); // Update the path as needed
//        $file = file_get_contents($path);
//        $response = response($file, 200);
//        $response->header('Content-Type', 'video/mp4'); // Adjust the Content-Type if needed
//        return $response;
//       // return view('dashboard.course.edit', compact('course'));
//    }

    public function destroy(Courses $course)
    {
        // Soft delete the product
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Courses deleted successfully.');
    }


    public function see($id)
    {
        $course = Courses::find($id);
        //dd($course);

        if (!$course) {
            return abort(404); // Handle course not found
        }

//        return view('courses.show', compact('course'));

        return view('website.course.index', compact('course'));
//            ['courses' => $courses]);

    }

    public function mycourses()
    {
//      $courses = Courses::take(4)->get();
//        $courses =   Courses::find(1); // Retrieve a model instance

        $courses = Courses::paginate(12);
//       $courses = Courses::orderBy('id')->cursorPaginate(10);



        return view('website.course.getall', compact('courses'));


    }

    public function ma(Request $request)
    {
        $courses = Courses::all();
        if ($request->keyword != '') {
            $courses = Courses::where('name', 'LIKE', '%' . $request->keyword . '%')->get();
        }

        $query = $request->input('courses');

        $results = Courses::where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();

        return response()->json(['courses' => $courses]);
    }

    public function search(Request $request)
    {
//        if ($request->keyword != '') {
//            $courses = Courses::where('name', 'LIKE', '%' . $request->keyword . '%')->get();
//        }

        $query = $request->input('courses');

        $courses = Courses::where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();


//        if ($request->ajax()) {
//            $data = Courses::where('name', 'LIKE', '%' . $request->search . '%')->get();
//
//
//        $query = $request->input('q');
//        $courses = Courses::where('name', 'LIKE', "% $query %")
//            ->orWhere('de', 'LIKE', "%$searchTerm%")
//            ->get();


//        return response()->json(['courses' => $courses]);

//            $output = '';
////
//            if (count($data) > 0) {
//
//                $output = '
//                <table class = "table">
//               <thead>
//                <tr>
//                <th scope= "col">#</th>
//                 <th scope= "col">name</th>
////                 <th scope= "col"></th>
//                  </tr>
//                  </thead>
//                    </tbody>';
//
//
//                foreach ($data as $row) {
//
//                    $output .= '
//                 <tr>
//                 <th scope="row">' . $row->name . '</th>
//                 </tr>
//                 ';
//                }
//
//                $output .= '
//                     </tbody>
//                     </table> ';
//
//
//            } else {
//
//                $output .= 'No results';
//            }
//
//            return $output;

        return view('website.course.getall', compact('courses'));
//        }
    }



}




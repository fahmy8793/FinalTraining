<?php

namespace App\Http\Controllers\Auth;
use App\Http\Resources\Post as PostResource;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
//    /*
//    |--------------------------------------------------------------------------
//    | Register Controller
//    |--------------------------------------------------------------------------
//    |
//    | This controller handles the registration of new users as well as their
//    | validation and creation. By default this controller uses a trait to
//    | provide this functionality without requiring any additional code.
//    |
//    */
//
//    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest');
       $this->redirectTo = RouteServiceProvider::HOME;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function showRegistrationForm()
    {
        return view('website.user.registration');

        // Use your login form view

        // Use the same registration form as users or create a new one for admins
    }
////
//
//
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//        ]);
//    }
//
//    /**
//     * Create a new user instance after a valid registration.
//     *
//     * @param  array  $data
//     * @return \App\Models\customer
//     */
//    protected function create(array $data)
//    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//            'role_id' => true,
//        ]);
//
//        return view('dashboard.user.index');
//
//    }
//}


// ...

//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'Emplyee Id' => ['required', 'string', 'confirmed'],
//            'role_id' => ['required', 'string', 'confirmed'],
//            'status' => ['required', 'string', 'confirmed'],
//        ]);
//    }

//    protected function create(array $data)
//    {
//         User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'Emplyee Id' => $data['Emplyee Id'],
//            'role_id' => $data['role_id'],
//            'password' => bcrypt($data['password']),
////            dd($data);
//
//
//        ]);
//        return redirect()->route('home')->with('success', 'Courses created successfully.');
//
//    }

//    public function store(Request $request)
//    {
//        $data = $request->validate([
//            'name' => 'required|string|max:255',
//            'role_id' => 'required|string|max:255',
//            'email' => 'required|string|max:255',
//            'Emplyee Id' => 'required|string|max:255',
//
//
//        ]);
//
//        User::create($data);
//
////        User::create($data);
//
////        return view('dashboard.feedback.index');
//
//        return redirect()->route('home')->with('success', 'user added successfully.');
//
//    }
//
//}










public function index()
{
    // $categories = Category::all();
    $users = User::all();
    return view('website.user.registration', compact('users'));
    //  return PostResource::collection($categories);

}

//public function create()
//{
//
//    return view('dashboard.category.create');
//}



public function register (Request $request)
{
    $data = $request->validate([

            'name' => 'required|string|max:255',
            'password' => 'required|string|max:255',
//            'role_id' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            ' Employee number' => 'numeric|max:255',

    ]);


    User::create($data);
//    dd($request->all());

    return redirect()->route('home')->with('success', 'User created successfully.');
}

//public function edit(Category $category)
//{
//    return view('dashboard.category.edit', compact('category'));
//}

//public function update(Request $request, Category $category)
//{
//    $data = $request->validate([
//        'name' => 'required|nullable|string|max:255',
//        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
//        'status' => 'required|boolean',
//    ]);
//
//    if ($request->hasFile('photo')) {
//        $path = $request->file('photo')->store('category_photos', 'public');
//        $data['photo'] = $path;
//    }
//
//    $category->update($data);
//
//    return redirect()->route('category.index')->with('success', 'Category updated successfully.');
//}
//
//public function destroy(Category $category)
//{
//    $category->delete();
//    return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
//}
    public function update(Request $request,User $users)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'Employee Id' => 'required|string|max:255',
            'role_id' => 'required|max:255',
            'status' => 'required|boolean',
        ]);


        $users->update($data);

        return redirect()->route('users.index')->with('success', 'user updated successfully.');
    }

    public function destroy(User $users)
    {
        $users->delete();
        return redirect()->route('users.index')->with('success', 'user deleted successfully.');
    }
}






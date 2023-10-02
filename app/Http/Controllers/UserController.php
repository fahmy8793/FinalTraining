<?php

namespace App\Http\Controllers;
use App\Http\Resources\Post as PostResource;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;
//use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Session;

class userController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        $users = User::all();
        return view('dashboard.user.index', compact('users'));
        //  return PostResource::collection($categories);

    }

    public function create()
    {

        return view('dashboard.category.create');
    }

    //return Category::all();

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'Employee Id' => 'required|string|max:255',
            'role_id' => 'required|max:255',
            'status' => 'required|boolean',
        ]);

        //dd($request->all());

        User::create($data);

        return redirect()->route('dashboard.category.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
      $users = User::find($id);

        return view('dashboard.user.edit', compact('users'));
//        return view('dashboard.user.edit', ['users' => $users]);
    }

    public function update($id,Request $request)
    {
        $users = User::find($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            //'password' => 'required|string|max:255',
            //'Employee Id' => 'required|string|max:255',
            'role_id' => 'required|max:255',
            'status' => 'required|boolean',
        ]);


        $users->update($data);

        return redirect()->route('users.index')->with('success', 'user updated successfully.');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('users.index')->with('success', 'user deleted successfully.');
    }
}

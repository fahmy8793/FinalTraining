<?php
//
//namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//
//class customerController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     */
//    public function index()
//    {
//        return view('dashboared.user.index');
//
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     */
//    public function show(string $id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     */
//    public function edit(string $id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(Request $request, string $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(string $id)
//    {
//        //
//    }
//}


namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

//use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

//use Session;

class customerController extends Controller
{

    public function create()
    {
        return view('dashboard.user.registration');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        customer::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);
        return view('dashboard.home.index');
    }

}




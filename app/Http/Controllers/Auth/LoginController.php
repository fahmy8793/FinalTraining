<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Courses;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\RegisterController;
use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->redirectTo = RouteServiceProvider::HOME;
    }
    public function showLoginForm()
    {
        return view('website.user.login'); // Use your login form view
    }
//
  public function LoginForm()
    {
        return view('website.user.login'); // Use your login form view
    }
//
//    public function username()
//    {
//        return 'email'; // Change the username field as needed
//    }







    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            // Authentication passed...
//            return redirect()->intended($this->redirectTo);
            return redirect()->route('home');
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }



    public function loginat(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            // Authentication passed...
//            return redirect()->intended($this->redirectTo);
            return redirect()->route('mycourses');
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }



//    public function login(Request $request)
//    {
//        $this->validateLogin($request);
//
//        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//            if (Auth::user()->role_id) {
//                $this->redirectTo = RouteServiceProvider::courses; // Redirect admin to admin dashboard
//            }
//
//            return $this->sendLoginResponse($request);
//        }
//
//        return $this->sendFailedLoginResponse($request);
//    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

//       Session::flush();
//
//         Auth::logout();

        return redirect('login');
    }
}


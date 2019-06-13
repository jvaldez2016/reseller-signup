<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/userDetail');
    }

    public function show()
    {
        return view('home');
    }

    public function logout()
    {
        $this->middleware('auth');
        Auth::logout();
        return redirect('/');
    }

    public function users()
    {
        $results=Auth::all();
        return view('auth.show-users')->with($results);
    }
}

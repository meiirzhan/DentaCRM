<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role_id == 3)
            return redirect()->route('registry-notes');
        else if($user->role_id == 4)
            return redirect()->route('dentist-notes');
        else if($user->role_id == 5)
            return redirect()->route('booker.block');
        else
            return redirect()->back();
    }
}

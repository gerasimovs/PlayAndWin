<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
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
        return view('home');
    }


    public function play(Request $request)
    {
        /* Get all available prizes */
        $prizes = config('prizes.types');

        /* Get random price */
        $prize = array_rand($prizes);

        return back()->with('status', 'Congratulations, you won is ' . $prizes[$prize]['name']);
    }
}

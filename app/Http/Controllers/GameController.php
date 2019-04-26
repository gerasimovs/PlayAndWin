<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PrizeService;

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


    public function play(Request $request, PrizeService $prizeService)
    {
        $prize = $prizeService->getPrize();

        return back()->with('status', 'Congratulations, you won is ' . $prize->name);
    }
}

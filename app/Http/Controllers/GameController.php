<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PrizeService;
use Illuminate\Contracts\Auth\Factory as AuthFactory;

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
    public function index(AuthFactory $auth)
    {
        $user = $auth->user();
        $prizes = $user->prizes;

        return view('home', compact('user', 'prizes'));
    }


    public function play(Request $request, PrizeService $prizeService)
    {
        $user = $request->user();
        $prize = $prizeService->getPrize();
        $prizeService->toPlay($user, $prize);

        return back()->with('status', 'Congratulations, you won is ' . $prize->name);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        logger('I was here');
        return view('home');
    }

    // public function post()
    // {
    //     logger('TEST POST');
    //     $data = request()->all();
    //     logger($data);
    // }

    public function reservation(Request $request)
    {
        logger('New Reservation');
        $data = $request->all();
        logger($data);
    }

    public function reservationConfirm(Request $request)
    {
        logger('Reservation Confirm');
        $data = $request->all();
        logger($data);
    }
}

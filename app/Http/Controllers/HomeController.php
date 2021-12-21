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
        $this->middleware('auth');
        //$this->middleware('permission:view posts', ['only' => ['index']]);
        //$this->middleware('permission:publish posts', ['only' => ['publish']]);
        //$this->middleware('permission:unpublish posts', ['only' => ['unpublish']]);

        //$this->middleware(['role:admin','permission:publish posts|unpublish posts']);
        //$this->middleware(['role_or_permission:dmin|view post']);




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
}

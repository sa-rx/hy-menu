<?php

namespace App\Http\Controllers;
use App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Food;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->get();
        //$offers = Offer::orderBy('id','DESC')->get();
        



        $offers = Offer::whereAvailable('1')->get();

        return view('home',compact('categories','offers'));
    }
    
}

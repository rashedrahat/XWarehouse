<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

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
        $numberOfEmployees = User::count();
        $totalProducts = Product::sum('quantity');
        return view('dashboard')->with('numberOfEmployees',$numberOfEmployees)
                                ->with('totalProducts',$totalProducts);
    }
}

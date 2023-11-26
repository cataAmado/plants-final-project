<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        return view('home', [
            'products' => Product::all(),
        ]);
    }
}

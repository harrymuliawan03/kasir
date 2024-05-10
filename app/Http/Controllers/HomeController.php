<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $foods = Food::all();
        return view('home.index', compact('foods'));
    }
}
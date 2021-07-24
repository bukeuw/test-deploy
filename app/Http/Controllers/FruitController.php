<?php

namespace App\Http\Controllers;

use App\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index()
    {
        $fruits = Fruit::all();

        return view('fruits.list', compact('fruits'));
    }
}

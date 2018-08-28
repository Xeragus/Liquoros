<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    public function getIndex() {
    //    $beers = Category::find('1')->products();
    $products = Category::all();
    //     dd($beers);
        return view('welcome', ['products' => $products]);
    }
}

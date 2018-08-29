<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    public function getIndex() {
        $products = Product::all();
        return view('home', ['products' => $products]);
    }

    public function getCart() {
        return view('cart');
    }

    public function getCheckout() {
        return view('checkout');
    }

    public function getWines() {
        $products = Product::where('category_id', 1)->get();
        return view('wines', ['products' => $products]);
    }

    public function getBeers() {
        $products = Product::where('category_id', 2)->get();
        return view('wines', ['products' => $products]);
    }

    public function getSpirits() {
        $products = Product::where('category_id', 3)->get();
        return view('wines', ['products' => $products]);
    }

    public function getProduct() {
        return view('product');
    }
}

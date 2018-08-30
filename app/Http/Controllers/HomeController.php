<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session;
use App\Cart;

class HomeController extends Controller
{
    public function getIndex() {
        $products = Product::inRandomOrder()->get();
        return view('home', ['products' => $products]);
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // dd($cart);
        return view('cart', ['products' => $cart->cartItems, 'totalPrice' => $cart->cartTotalPrice]);
    }

    public function getCheckout() {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('checkout', ['products' => $cart->cartItems, 'totalPrice' => $cart->cartTotalPrice]);
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

    public function getProduct($id) {
        $product = Product::find($id);
        return view('product', ['product' => $product]);
    }

    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        // dd($cart);
        return redirect()->back();
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);
        if (count($cart->cartItems) > 0) {
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('cart');
    }

    public function emptyCart() {
        Session::forget('cart');
        return redirect()->back();
    }

    public function postFilter(Request $request) {
        $price_minimum = '';
        if($request['category']=='' && ($request['price'])=='') {
            return redirect()->back();
        }
        if($request['category']!="" && ($request['price'])!="") {
            $category = $request['category'];
            $prices = explode(' - ', $request['price']);
            $price_minimum = $prices[0];
            $price_maximum = $prices[1];
            $products = Product::where('category_id', $category)
                                ->where('price', '>=', $price_minimum)
                                ->where('price', '<=', $price_maximum)
                                ->get();
        } else if($request['category'] != "") {
            $category = $request['category'];
            $products = Product::where('category_id', $category)->get();
        } else if($request['price'] != "") {
            $prices = explode(' - ', $request['price']);
            $price_minimum = $prices[0];
            $price_maximum = $prices[1];
            $products = Product::where('price', '>=', $price_minimum)
                                ->where('price', '<=', $price_maximum)
                                ->get();
        }
        // dd(['products' => $products, 'selectedCategory' => $category, 'selectedMinimum' => $price_minimum]);
        return view('home', ['products' => $products, 'selectedCategory' => $category, 'selectedMinimum' => $price_minimum]);
    }
}
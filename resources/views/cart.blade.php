@extends('layouts.master')
@section('content')
<div class="container py-5 my-5">
    <h1 class="text-center">Shopping Cart</h1>
    @if(Session::has('cart'))
    <table class="table table-striped my-5">
        <thead>
            <tr>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Quantity</th>
            <th scope="col">Size</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product['item']->name }}</th>
                <td>${{ $product['item']->price }}</td>
                <td>
                    <div class="product-img">
                        <img src="{{ URL::to('/') }}/storage//{{ $product['item']->image }}" alt="" class="cart-image">
                    </div>
                </td>
                <td><input class="item-quantity text-center" type="text" value="{{ $product['qty'] }}" name="itemQuantity"></td>
                <td>{{ $product['item']->size }}</td>
                <td>
                    <a href="{{ route('cart.removeItem', ['id' => $product['item']->id]) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div class="d-flex justify-content-between align-items-center">
        <div class="total-price">
            <h5>Cart total: {{ $totalPrice }}</h5>
        </div>
        <div class="to-checkout">
            <a href="{{ route('cart.empty') }}" class="btn btn-danger">Empty shopping cart</a>
            <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to checkout</a>
        </div>
    </div>
    @else
    <div class="alert alert-warning my-5 py-5" role="alert">
        <h5>Your shopping cart is empty!</h5>
    </div>
    @endif
</div>
@endsection
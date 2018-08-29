@extends('layouts.master')
@section('content')
<div class="container py-5">
    <h1 class="text-center">Shopping Cart</h1>
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
            <tr>
                <th scope="row">Wineproduct 1</th>
                <td>$20.99</td>
                <td>
                    <div class="product-img">
                        <img src="img.png" alt="" class="h-10">
                    </div>
                </td>
                <td><input type="text"></td>
                <td>750ml</td>
                <td>
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Wineproduct 1</th>
                <td>$20.99</td>
                <td>
                    <div class="product-img">
                        <img src="img.png" alt="" class="h-10">
                    </div>
                </td>
                <td>1</td>
                <td>750ml</td>
                <td>
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Wineproduct 1</th>
                <td>$20.99</td>
                <td>
                    <div class="product-img">
                        <img src="img.png" alt="" class="h-10">
                    </div>
                </td>
                <td>1</td>
                <td>750ml</td>
                <td>
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="to-checkout text-right">
        <button class="btn btn-danger">Empty shopping cart</button>
        <button class="btn btn-success">Proceed to checkout</button>
    </div>
</div>
@endsection
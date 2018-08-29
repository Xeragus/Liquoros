@extends('layouts.master')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        
        <div class="col-sm-7">
            <h1>Product Name 1</h1>

            <div class="row p-5">
                <div class="col-sm-6">
                    <div class="product-img">
                        <img src="img.png" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-sm-6 d-flex flex-column justify-content-between">
                    <div class="product-info">
                        <a href="#" class="category">Wines</a> |
                        <a href="#" class="subcategory">Red Wine</a>
                        <hr>
                        <p class="mt-2 mb-0">Price: $15.99</p>
                        <hr>
                        <p class="mb-0">750ml</p>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary w-100">Add to cart <i class="fas fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
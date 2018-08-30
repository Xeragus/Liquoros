@extends('layouts.master')
@section('content')
<div class="container py-5">
    <h1 class="text-center">{{ $product->name }}</h1>
    <div class="row justify-content-center">
        <div class="col-sm-7">

            <div class="row p-5">
                <div class="col-sm-6">
                    <div class="product-img">
                        <img src="{{ URL::to('/') }}/storage//{{ $product->image }}" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-sm-6 d-flex flex-column justify-content-between">
                    <div class="product-info">
                        Category: <a href="#" class="category">{{ $product->category->name }}</a>
                        <hr>
                        <p class="mt-2 mb-0">Price: ${{ $product->price }}</p>
                        <hr>
                        <p class="mb-0">{{ $product->size }}</p>
                    </div>
                    <div class="">
                        <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-primary w-100">Add to cart <i class="fas fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
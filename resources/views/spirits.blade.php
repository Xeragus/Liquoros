@extends('layouts.master')
@section('content')
<div class="container py-5">
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-6 col-md-3 my-3">
            <div class="product-info-wrapper border border-light bg-light p-3">
                <div class="img-wrapper">
                    <img src="{{ URL::to('/') }}/storage//{{ $product->image }}" alt="" class="w-100">
                </div>
                <div class="info-wrapper py-4">
                    <h5><a href="#">{{ $product->name }}</a></h5>
                    Category: <a href="{{ route('spirits') }}" class="category">{{ $product->category->name }}</a>
                    <p class="mt-2 mb-0">Price: ${{ $product->price }}</p>
                    <p class="mb-0">{{ $product->size }}ml</p>
                </div>
                <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-success w-100 mt-3">Add to cart <i class="fas fa-cart-plus"></i></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
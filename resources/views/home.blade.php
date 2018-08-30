@extends('layouts.master')
@section('content')
<div class="container py-5">
    <div class="filter-wrapper mb-5">
        <p>
            <a class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Filter products
            </a>
        </p>
        <form action="{{ route('filter') }}" method="post">
            @csrf
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <select class="w-100" name="category" id="catselect">
                            <option value="">Select a category</option>
                            <option value="1" @if(isset($selectedCategory) && $selectedCategory==1)selected @endif>Wines</option>
                            <option value="2" @if(isset($selectedCategory) && $selectedCategory==2)selected @endif>Beers</option>
                            <option value="3" @if(isset($selectedCategory) && $selectedCategory==3)selected @endif>Spirits</option>
                        </select> 
                    </div>
                    <div class="col-sm-6">
                        <select class="w-100" name="price" id="priceselect">
                            <option value="">Select a price range</option>
                            <option value="0 - 15" @if(isset($selectedMinimum) && $selectedMinimum=="0")selected @endif>$0 - $15</option>
                            <option value="15 - 25" @if(isset($selectedMinimum) && $selectedMinimum=="15")selected @endif>$15 - $25</option>
                            <option value="25 - 40" @if(isset($selectedMinimum) && $selectedMinimum=="25")selected @endif>$25 - $40</option>
                            <option value="40 - 60" @if(isset($selectedMinimum) && $selectedMinimum=="40")selected @endif>$40 - $60</option>
                            <option value="60 - 200" @if(isset($selectedMinimum) && $selectedMinimum=="60")selected @endif>$60 - $200</option>
                        </select> 
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="row">
            @forelse($products as $product)
            <div class="col-sm-6 col-md-3 my-3">
                <div class="product-info-wrapper border border-light bg-light p-3">
                    <div class="img-wrapper">
                        <img src="{{ URL::to('/') }}/storage//{{ $product->image }}" alt="" class="w-100">
                    </div>
                    <div class="info-wrapper py-4">
                        <h5><a href="#">{{ $product->name }}</a></h5>
                        <a href="#" class="category">{{ $product->category->name }}</a> |
                        <a href="#" class="subcategory">Red Wine</a>
                        <p class="mt-2 mb-0">Price: ${{ $product->price }}</p>
                        <p class="mb-0">{{ $product->size }}ml</p>
                    </div>
                    <a href="{{ route('product', ['id' => $product->id]) }}" class="btn btn-primary w-100">Open product <i class="fas fa-external-link-alt"></i></a>
                    <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-success w-100 mt-3">Add to cart <i class="fas fa-cart-plus"></i></a>
                </div>
            </div>
            @empty
            <div class="alert alert-warning my-5 py-5" role="alert">
                <h5>No products with that filter criteria!</h5>
            </div>
            @endforelse
    </div>
</div>
@endsection
@extends('layouts.master')
@section('content')
<div class="container py-5">
    <div class="filter-wrapper mb-5">
        <p>
            <a class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Filter products
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="row">
                    <div class="col-sm-4">
                         <select class="w-100">
                            <option value="">Select a category</option>
                            <option value="">Wines</option>
                            <option value="">Beers</option>
                            <option value="">Spirits</option>
                        </select> 
                    </div>
                    <div class="col-sm-4">
                         <select class="w-100">
                            <option value="">Select a subcategory</option>
                            <option value="">White Wine</option>
                            <option value="">Red Wine</option>
                            <option value="">Craft</option>
                        </select> 
                    </div>
                    <div class="col-sm-4">
                         <select class="w-100">
                            <option value="">Select a price range</option>
                            <option value="">$0 - $15</option>
                            <option value="">$15 - $25</option>
                            <option value="">$25 - $40</option>
                            <option value="">$40 - $60</option>
                            <option value="">> $60</option>
                        </select> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            @foreach($products as $product)
            <div class="col-sm-6 col-md-3 my-3">
                <div class="product-info-wrapper border border-secondary p-3">
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
                    <button type="submit" class="btn btn-primary w-100">Open product <i class="fas fa-external-link-alt"></i></button>
                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection
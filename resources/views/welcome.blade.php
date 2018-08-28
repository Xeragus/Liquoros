@extends('layouts.master')
@section('content')
<ul>
    @foreach($products as $product)
        <li>{{ $product->id }}. {{ $product->name }}</li>
    @endforeach
</ul>

@endsection
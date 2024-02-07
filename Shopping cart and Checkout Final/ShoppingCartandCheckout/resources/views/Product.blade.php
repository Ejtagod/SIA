@extends('layouts.app')

@section('content')


<div class="container">
    <h1 class="text-center">Product Page</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @if(count($products) > 0)
            @foreach($products as $product)
                <div class="col">
                    <div class="card">
                        <img src="" alt="{{ $product->product_name }}" class="card-img-top" height="300">
                        <div class="card-header">
                            {{ $product->product_name }}
                            <span class="float-end">₱{{$product->price}}</span>
                        </div>
                        <div class="card-body">
                            <p>{{ $product->product_description }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('add-cart', $product->product_id)}}"
                               class="btn btn-success btn-block">Add To Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>




@endsection

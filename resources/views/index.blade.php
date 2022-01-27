@extends('layouts.app')

@section('content')
    <h1>Products</h1>

    @forelse($products as $product)
        <div class="card">
            <div class="card-image">
                <a href="/product/{{ \Illuminate\Support\Str::slug($product->title) }}/{{ $product->id }}">
                    <img src="/image/{{ $product->image }}" alt="">
                </a>
            </div>
            <div class="card-content">
                <div class="card-title">{{ $product->title }}</div>
                <div>{{ $product->description }}</div>
            </div>
        </div>
    @empty

    @endforelse
@endsection

@extends('layouts.admin')

@section('content')

    <div>
        {{-- TODO redirect to name or controller --}}
        <a href="/admin/products/create" class="btn primary">Create new product</a>
    </div>

    <div class="card">
        <div class="card-content">
            @forelse($products as $product)
                <div class="product-data">
                    <div class="key">Title</div>
                    <div class="value">{{ $product->title }}</div>
                </div>

                <div class="product-data">
                    <div class="key">Description</div>
                    <div class="value">{{ $product->description }}</div>
                </div>

                <div class="product-data">
                    <div class="key">Image</div>
                    @isset($product->image)
                        <div class="value">
                            <img src="/image/{{ $product->image }}" alt="image">
                        </div>
                    @endisset
                </div>

                <div class="product-data">
                    <div class="key">Price</div>
                    <div class="value">{{ $product->price }}</div>
                </div>

                <div class="product-data">
                    <a href="/admin/products/{{ $product->id }}">Edit product</a>
                </div>
            @empty
                Not yet
            @endforelse
        </div>
    </div>


@endsection

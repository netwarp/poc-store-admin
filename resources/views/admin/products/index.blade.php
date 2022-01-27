@extends('layouts.admin')

@section('content')

    <div>
        {{-- TODO redirect to name or controller --}}
        <a href="/admin/products/create">Create new product</a>
    </div>

    @forelse($products as $product)
        <div class="product">
            <div>Title</div>
            <div>{{ $product->title }}</div>

            <div>Description</div>
            <div>{{ $product->description }}</div>

            <div>Price</div>
            <div>{{ $product->price  }}</div>

            <div>Image</div>
            <div><img src="/image/{{ $product->image }}" alt=""></div>

            <div>
                <a href="/admin/products/{{ $product->id }}">Edit</a>
            </div>
        </div>
    @empty
        <div>
            Not product yet.
        </div>
    @endforelse
@endsection

@extends('layouts.admin')

@section('content')

    <div>
        {{-- TODO redirect to name or controller --}}
        <a href="/admin/products" class="btn primary">Back to products</a>
    </div>

    <h1>Create new product</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        @isset($product)
            @method('put')
        @endisset

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $product->title ?? old('title') }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="10">{{ $product->description ?? old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image">

            @isset($product->image)
                <div>
                    <img src="/image/{{ $product->image }}" alt="">
                </div>
            @endisset
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ $product->price ?? old('price') }}">
        </div>

        <div>
            <button type="submit" class="btn primary">Send</button>
        </div>
    </form>

    @isset($product)
        <div class="zone-danger">
            <div>
                WARNING
            </div>

            <form action="/admin/products/{{ $product->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn danger">Delete</button>
            </form>
        </div>
    @endisset
@endsection

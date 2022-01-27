@extends('layouts.admin')

@section('content')

    <div>
        {{-- TODO redirect to name or controller --}}
        <a href="/admin/products">Back to products</a>
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

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $product->title ?? old('title') }}">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="10">{{ $product->description ?? old('description') }}</textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image">

            @isset($product->image)
                <div>
                    <img src="/image/{{ $product->image }}" alt="">
                </div>
            @endisset
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ $product->price ?? old('price') }}">
        </div>

        <div>
            <button type="submit">Send</button>
        </div>
    </form>
@endsection

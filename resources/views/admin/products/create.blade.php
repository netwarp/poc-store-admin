@extends('layouts.admin')

@section('content')
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
            <input type="text" name="title" value="{{ old('title') }}">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="10">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ old('price') }}">
        </div>

        <div>
            <button type="submit">Send</button>
        </div>
    </form>
@endsection

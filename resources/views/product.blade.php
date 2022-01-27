@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-image">
            <img src="/image/{{ $product->image }}" alt="{{ $product->title }}">
        </div>
        <div class="card-content">
            <h1>{{ $product->title ?? '' }}</h1>
            <div>
                {{ $product->description ?? '' }}
            </div>

            <div>
                {{ $product->price ?? '' }}
            </div>

            <div class="button-store">
                ADD
            </div>
        </div>
    </div>
@endsection

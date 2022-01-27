@extends('layouts.admin')

@section('content')
    @forelse($products as $product)

    @empty
        <div>
            Not product yet.
        </div>
    @endforelse
@endsection

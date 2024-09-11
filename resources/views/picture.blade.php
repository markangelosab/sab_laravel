@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Pictures</h1>

    @if($pictures->count() > 0)
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach($pictures->take(3) as $picture)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('storage/' . $picture->path) }}" class="card-img-top" alt="Picture">
                            <div class="card-body">
                                <p class="card-text">Description for picture.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
    <p>No pictures available.</p>
    @endif
</div>
@endsection

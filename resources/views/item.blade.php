@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>{{ $item->name }}</h1>

    @if($pictures->count() > 0)
    <div class="card">
        <div class="card-body">
            <div id="itemCarousel" class="carousel slide">
                <div class="carousel-inner">
                    @foreach($pictures as $index => $picture)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $picture->path) }}" class="d-block w-100" alt="Picture of {{ $item->name }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#itemCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#itemCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
    @else
    <p>No pictures available for this item.</p>
    @endif

    <p class="mt-4">{{ $item->description }}</p>
</div>
@endsection

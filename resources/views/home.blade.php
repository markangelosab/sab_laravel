@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Welcome to the Home Page</h1>
    <p>This is the home page content.</p>
</div>
@endsection

@section('styles')
<style>
    body {
        background-image: url('https://example.com/your-background-image.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
    }
</style>
@endsection

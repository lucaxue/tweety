@extends('layouts.app')

@section('content')
<div>
    @auth
    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    @endauth
</div>
@endsection
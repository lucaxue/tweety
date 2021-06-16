@extends('layouts.app')

@section('content')
	@include('_profile-header')
	@include('_timeline',[
		'tweets' => $user->tweets
	])
@endsection
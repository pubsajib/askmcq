@extends('layouts.user')
@section('title', 'HOME')
@section('styles')
@endsection

@section('content')
	@include('partials/banner')
            @include('partials/services')
            @include('partials/questions')
            @include('partials/collections')
	@if (Auth::check())
		{{-- expr --}}
	@endif
@endsection
@section('scripts') @endsection

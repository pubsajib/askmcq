@extends('layouts.user')
@section('title', 'HOME')
@section('styles')
@endsection

@section('content')
	@if (Auth::check())
		{{-- expr --}}
	@endif
@endsection
@section('scripts') @endsection

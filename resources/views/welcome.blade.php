@extends('layouts.user')
@section('title', 'HOME')
@section('styles')
@endsection

@section('content')
	@include('partials/banner')
    @include('partials/categories')
    @include('partials/questions')
    @include('partials/collections')
    @include('partials/modal-categories')
@endsection
@section('scripts')
@endsection

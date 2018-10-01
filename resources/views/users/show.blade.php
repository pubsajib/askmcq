@extends('layouts.admin')
@section('title', $user->name .' Details')
@section('styles')
@endsection
@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    	<h1 class="text-center">{{ $user->name }} Details</h1>
    	@if ($user)
    		{{ $user }}
    	@else
    		<p class="text-center"><strong>Not Found!</strong></p>
    	@endif
    </div>
  </div>
@endsection
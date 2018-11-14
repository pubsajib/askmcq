@extends('layouts.profile')
@section('content')
<form action="{{ route('profile.update', $user->id) }}" method="post" role="form" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-3">
            <div class="form-group">
                <label for="">New Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" required>
            </div>
            <div class="form-group text-right">
            	<button type="submit" class="btn btn-theme pill">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection
@extends('layouts.profile')
@section('content')
<form action="{{ route('profile.update', $user->id) }}" method="post" role="form" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Profession</label>
                <input type="text" name="profession" value="{{ $user->profession }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">BIO</label>
                <textarea name="bio" class="form-control" rows="3">{{ $user->bio }}</textarea>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Profile Image &nbsp; &nbsp; &nbsp;</label>
                <input type="hidden" name="image" class="form-control" id="profileImageInput">
                <a href="javascript:;" class="btn btn-theme-border pill" @click="imageUploadModal">Upload Image</a>
                <div class="profile-image" @click="imageUploadModal">
                    @if ($user->image)
                            <img class="mt20 img-circle" src="{{ asset('images/users/'.$user->image) }}" alt="{{ $user->name }} image">
                    @else
                        <span class="mt20 fa fa-user circle-icon"></span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-12 text-right">
            <button type="submit" class="btn btn-theme pill">Submit</button>
        </div>
    </div>
</form>
@endsection
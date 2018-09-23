@extends('layouts.admin')
@section('title', 'User Role')
@section('styles')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
    	@if ($users)
            <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Admin</th>
                        <th>Editor</th>
                        <th>User</th>
                        <th class="text-center" style="width: 125px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr id="user-{{ $user->id }}" class="roleWrapper">
                        <td> <a href="{{ route('user.show', $user) }}">{{ $user->name }}</a> </td>
                        <td> <input type="checkbox" name="admin" {{ $user->hasRole('admin') ? 'checked' : '' }}> </td>
                        <td> <input type="checkbox" name="editor" {{ $user->hasRole('editor') ? 'checked' : '' }}> </td>
                        <td> <input type="checkbox" name="user" {{ $user->hasRole('user') ? 'checked' : '' }}> </td>
                        <td style="text-align: center;">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Admin</th>
                        <th>Editor</th>
                        <th>User</th>
                        <th class="text-center" style="width: 125px;">Action</th>
                    </tr>
                </tfoot>
            </table>
    	@else
    		<p class="text-center"><strong>Not Found!</strong></p>
    	@endif
    </div>
  </div>
@endsection
@section('scripts')
    <script src="{{ asset('backend/js/sb-admin-datatables.min.js') }}"></script>
@endsection
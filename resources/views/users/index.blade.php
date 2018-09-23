@extends('layouts.admin')
@section('title', 'User')
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
                        <th>Education</th>
                        <th>Institution</th>
                        <th>Field of Experience</th>
                        <th>Experience</th>
                        <th class="text-center" style="width: 125px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td> <a href="{{ route('user.show', $user) }}">{{ $user->name }}</a> </td>
                        <td> {{ $user->education }}</td>
                        <td> {{ $user->institution }}</td>
                        <td> {{ $user->exp_type }}</td>
                        <td> {{ $user->exp_years }}</td>
                        <td style="text-align: center;">
                            <a class="btn btn-sm btn-info">Edit</a>
                            <a class="btn btn-sm btn-danger">Inactive</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Education</th>
                        <th>Institution</th>
                        <th>Field of Experience</th>
                        <th>Experience</th>
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
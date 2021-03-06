@extends('layouts.admin')
@section('title', 'User')
@section('styles')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="row">
    @if ($inactiveUsers = inactiveUsers())
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>New user remainder!</strong> You have <strong>{{ $inactiveUsers }}</strong> new {{ $inactiveUsers > 1 ? 'users' : 'user'}} to <a href="{{ route('user.inactive') }}">active</a>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
    @endif
    <div class="col-md-12">
    	@if (!$users->isEmpty())
            <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>BIO</th>
                        <th class="text-center" style="width: 125px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td> <a href="{{ route('user.show', $user) }}">{{ $user->name }}</a> </td>
                        <td> {{ $user->email }}</td>
                        <td> {{ $user->bio }}</td>
                        <td style="text-align: center;">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-dark" title="Edit"><i class="fa fa-edit"></i></a>
                            @if ($user->is_active == 1)
                                <a @click="deactivateUser({{ $user->id }})" class="btn btn-sm btn-danger" title="Deactivate"><i class="fa fa-times-circle"></i></a>
                            @else
                                <a @click="activateUser({{ $user->id }})" class="btn btn-sm btn-info" title="Acitvate"><i class="fa fa-check-circle"></i></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>BIO</th>
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
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script>
        new Vue({
            el: '#App',
            data(){
                return {
                    path:"{!! url('/user-status') !!}",
                    updateUrl: function(id){ return this.path +'/'+ id },
                }
            },
            methods: {
                deactivateUser(user){
                    var updateUrl = this.updateUrl(user);
                    axios.put(updateUrl, {is_active: '0'})
                    .then(function(response) {
                        window.location.reload();
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                },
                activateUser(user){
                    var updateUrl = this.updateUrl(user);
                    axios.put(updateUrl, {is_active: '1'})
                    .then(function(response) {
                        window.location.reload();
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                },
            }
        });
    </script>
@endsection
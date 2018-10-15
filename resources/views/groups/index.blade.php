@extends('layouts.admin')
@section('title', 'Groups')
@section('styles')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
    	@if ($groups)
            <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>##</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th class="text-center" style="width: 125px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($groupCounter = 1)
                    @foreach ($groups as $group)
                        <tr>
                            <td>{{ $groupCounter }}</td>
                            <td> <a href="{{ route('group.show', $group->id) }}">{{ $group->name }}</a> </td>
                            <td> {{ $group->description }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('group.edit', $group->id) }}" class="btn btn-sm btn-dark" title="Edit"><i class="fa fa-edit"></i></a>
                                <a @click="deleteCat({{ $group->id }})" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-times-circle"></i></a>
                            </td>
                        </tr>
                        @php ($groupCounter ++)
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>##</th>
                        <th>Name</th>
                        <th>Description</th>
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
                    path:"{!! url('/category') !!}",
                    deleteUrl: function(id){ return this.path +'/'+ id },
                }
            },
            methods: {
                deleteCat(category){
                    var deleteUrl = this.deleteUrl(category);
                    // alert(category +' === '+ deleteUrl); return false;
                    axios.delete(deleteUrl, {category: category})
                    .then(function(response) {
                        // console.log(response.data);
                        window.location.reload();
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                }
            }
        });
    </script>
@endsection
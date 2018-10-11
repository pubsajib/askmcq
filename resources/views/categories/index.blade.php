@extends('layouts.admin')
@section('title', 'User')
@section('styles')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
    	@if ($categories)
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
                    @php ($catCounter = 1)
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $catCounter }}</td>
                            <td> <a href="{{ route('category.show', 1) }}">{{ $category['name'] }}</a> </td>
                            <td> {{ $category['description'] }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('category.edit', $category['id']) }}" class="btn btn-sm btn-dark" title="Edit"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-times-circle"></i></a>
                            </td>
                        </tr>
                        @if ($category['subCategories'])
                            @php ($subCatCounter = 1)
                            @foreach ($category['subCategories'] as $subCategory)
                                <tr>
                                    <td>{{ $catCounter }}.{{ $subCatCounter }}</td>
                                    <td> <a href="{{ route('category.show', $subCategory['id']) }}"> -- {{ $subCategory['name'] }}</a> </td>
                                    <td> {{ $subCategory['description'] }}</td>
                                    <td style="text-align: center;">
                                        <a href="{{ route('category.edit', $subCategory['id']) }}" class="btn btn-sm btn-dark" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-times-circle"></i></a>
                                    </td>
                                </tr>
                                @php ($subCatCounter ++)
                            @endforeach    
                        @endif
                        @php ($catCounter ++)
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
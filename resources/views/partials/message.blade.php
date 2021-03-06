{{-- @php Session::flash('success', 'Verified successfully.'); @endphp --}}
@if (Session::has('alert'))
	<div class="alert text-center alert-askmcq alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	  {{ Session::get('alert') }}
	</div>
	
@endif
@if (Session::has('success'))
	<div class="alert alert-success">
	  {{ Session::get('success') }}
	</div>
	<script>
		jQuery(function($) {
			setTimeout(function() {
				$('.alert-success').hide(500);
			}, 5000);
		});
	</script>
@endif

@if (Session::has('error'))
	<div class="alert alert-danger">
	  <strong>Error!</strong> 
		  <ul>
		  	<li>{{ Session::get('error') }}</li>
		  </ul>
	</div>
	<script>
		jQuery(function($) {
			setTimeout(function() {
				$('.alert-danger').hide(500);
			}, 5000);
		});
	</script>
@endif

@if ( count($errors) > 0 )
	<div class="alert alert-danger">
	  <strong>Error!</strong> 
		  <ul>
		  @foreach ( $errors->all() as $error )
		  	<li>{{ $error }}</li>
		  @endforeach
		  </ul>
	</div>
	<script>
		jQuery(function($) {
			setTimeout(function() {
				$('.alert-danger').hide(500);
			}, 10000);
		});
	</script>
@endif
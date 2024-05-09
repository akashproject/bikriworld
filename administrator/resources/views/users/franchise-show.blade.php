@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" action="">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Edit User #1</h4>
				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> User Info </h4>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->name }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->email }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->mobile }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Document Status</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->document_satus }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">City / Location</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->city }}</span >
					</div>
				</div>

				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Deal With</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						@php 
							if(isset($user->dealing_model)) {
								$models = json_decode($user->dealing_model);
								foreach($models as $model) {
									echo $model.', ';
								}
							}
						@endphp
					</div>
				</div>
		</form>
		
	</div>
</div>                   
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection

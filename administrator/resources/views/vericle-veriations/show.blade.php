@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submit-vehicle-config') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Edit Brand </h4>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				
				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Type</label>
					<div class="col-sm-9">
						<select name="type" id="type" class="select2 form-control custom-select">	
							<option value="">Select Type</option>
							<option value="year"  {{ ($variation->type == "year")?'selected' : '' }} > Release Year </option>
							<option value="km" {{ ($variation->type == "km")?'selected' : '' }} > Kilometer Driven</option>
						<select>
					</div>
				</div>

				<div class="form-group row">
					<label for="value" class="col-sm-3 text-right control-label col-form-label">Configuration</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" id="name" placeholder="Configuration Name Here" value="{{ $variation->name }}">
					</div>
				</div>
				
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="variation_id" id="variation_id" value="{{ $variation->id }}" >
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


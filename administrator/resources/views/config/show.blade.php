@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submit-config') }}" enctype="multipart/form-data">
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
							<option value="year"  {{ ($config->type == "year")?'selected' : '' }} > Release Year </option>
							<option value="processer" {{ ($config->type == "processer")?'selected' : '' }} > Processer</option>
							<option value="ram"  {{ ($config->type == "ram")?'selected' : '' }} > Ram Memory </option>
							<option value="hdd"  {{ ($config->type == "hdd")?'selected' : '' }} > Hard Disk </option>
							<option value="screen"  {{ ($config->type == "screen")?'selected' : '' }} > Screen Size </option>
							<option value="graphic"  {{ ($config->type == "graphic")?'selected' : '' }} > Graphic Memory </option>
							
						<select>
					</div>
				</div>

				<div class="form-group row">
					<label for="value" class="col-sm-3 text-right control-label col-form-label">Configuration</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="value" id="value" placeholder="Configuration Name Here" value="{{ $config->value }}">
					</div>
				</div>
				
				<div class="form-group row">
					<label for="price" class="col-sm-3 text-right control-label col-form-label">Price</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="price" id="price" placeholder="Price Here" value="{{ $config->price }}" >
					</div>
				</div>
				
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="config_id" id="config_id" value="{{ $config->id }}" >
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


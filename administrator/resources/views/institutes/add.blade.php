@extends('layouts.admin')



@section('content')

<div class="col-12">

	<div class="card">

		<form class="form-horizontal" method="post" action="{{ url('submitinstitutes') }}" enctype="multipart/form-data">

			@csrf

			<div class="card-body">

				<h4 class="card-title"> Add Instinute</h4>

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

					<label for="title" class="col-sm-3 text-right control-label col-form-label">Banner Photo</label>

					<div class="col-md-9">

						<div class="custom-file">

							<input type="file" class="custom-file-input" name="cover" id="validatedCustomFile" required>

							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

							<div class="invalid-feedback">Example invalid custom file feedback</div>

						</div>

					</div>

				</div>

				<div class="form-group row">

					<label for="title" class="col-sm-3 text-right control-label col-form-label">Logo</label>

					<div class="col-md-9">

						<div class="custom-file">

							<input type="file" class="custom-file-input" name="logo" id="validatedCustomFile" required>

							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

							<div class="invalid-feedback">Example invalid custom file feedback</div>

						</div>

					</div>

				</div>

				<div class="form-group row">

					<label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="shortname" class="col-sm-3 text-right control-label col-form-label">Shortname</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="shortname" id="title" placeholder="Shortname Here" >

					</div>

				</div>
				<div class="form-group row">

					<label for="address" class="col-sm-3 text-right control-label col-form-label">Description </label>

					<div class="col-sm-9">

						<textarea class="form-control" name="description" id="description" placeholder="Description Here" > </textarea>

					</div>

				</div>

				<div class="form-group row">

					<label for="contact_no" class="col-sm-3 text-right control-label col-form-label">Contact no</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="contact_no" id="title" placeholder="Contact no Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="email" class="col-sm-3 text-right control-label col-form-label">Email Address</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="email" id="title" placeholder="Email Address Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="admin_email" class="col-sm-3 text-right control-label col-form-label">Admin email Address</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="admin_email" id="admin_email" placeholder="Admin email Address Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="year_of_inception" class="col-sm-3 text-right control-label col-form-label">Year of inception</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="year_of_inception" id="year_of_inception" placeholder="Year of inception Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="website" class="col-sm-3 text-right control-label col-form-label">Website</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="website" id="website" placeholder="Year of inception Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="hospital" class="col-sm-3 text-right control-label col-form-label">Hospitality</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="hospital" id="hospital" placeholder="Hospitality Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="placement" class="col-sm-3 text-right control-label col-form-label">Placemant</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="placement" id="placement" placeholder="Placemant Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="food_availablity" class="col-sm-3 text-right control-label col-form-label">Food availablity</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="food_availablity" id="food_availablity" placeholder="Food availablity Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="wifi" class="col-sm-3 text-right control-label col-form-label">Wifi</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="wifi" id="wifi" placeholder="Wifi Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="library" class="col-sm-3 text-right control-label col-form-label">Library</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="library" id="library" placeholder="Library Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="scholarships" class="col-sm-3 text-right control-label col-form-label">Scholarships</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="scholarships" id="scholarships" placeholder="Scholarships Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>

					<div class="col-sm-9">

						<textarea class="form-control" name="address" id="address" placeholder="Address Here" > </textarea>

					</div>

				</div>

				<div class="form-group row">

					<label for="how_to_reach" class="col-sm-3 text-right control-label col-form-label">How to reach</label>

					<div class="col-sm-9">

						<textarea class="form-control" name="how_to_reach" id="how_to_reach" placeholder="How to reach Here" > </textarea>

					</div>

				</div>

				<div class="form-group row">
					<label for="ownership_type" class="col-sm-3 text-right control-label col-form-label">Ownership type</label>
					<div class="col-sm-9">
						<select name="ownership_type" id="ownership_type" >

							<option value="">Ownership type</option>

							<option value="Private">Private</option>

							<option value="Government">Government</option>

						<select>

					</div>

				</div>
				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Country</label>
					<div class="col-sm-9">
						<select name="country_id" id="country_id" >							
							<option value="">Select State</option>
							@foreach($countries as $country)
							<option value="{{$country->id}}" > {{$country->name}}</option>
							@endforeach
						<select>

					</div>

				</div>
				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">State</label>
					<div class="col-sm-9">
						<select name="state_id" id="state_id" >							
							<option value="">Select State</option>
							@foreach($states as $state)
							<option value="{{$state->id}}" > {{$state->state_name}}</option>
							@endforeach
						<select>

					</div>

				</div>
				<div class="form-group row">
					<label for="city" class="col-sm-3 text-right control-label col-form-label">City</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="city" id="city" placeholder="City name Here" >
					</div>

				</div>
				<div class="form-group row">
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Upload Brochure</label>
					<div class="col-md-9">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="brouchure" id="validatedCustomFile" required>
							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
						</div>
					</div>

				</div>
  


			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="institute_id" id="institute_id" value="" >
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


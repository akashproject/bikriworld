@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submitcountries') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Country </h4>
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

					<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="name" id="name" placeholder="Name Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="code" class="col-sm-3 text-right control-label col-form-label">Code</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="code" id="code" placeholder="Code Here" >

					</div>

				</div>
				<div class="form-group row">

					<label for="currency" class="col-sm-3 text-right control-label col-form-label">Currency </label>

					<div class="col-sm-9">

						<textarea class="form-control" name="currency" id="currency" placeholder="Currency Here" > </textarea>

					</div>

				</div>


				<div class="form-group row">

					<label for="medicaleducation" class="col-sm-3 text-right control-label col-form-label">Medical education</label>

					<div class="col-sm-9">

						<textarea class="form-control" name="medicaleducation" id="medicaleducation" placeholder="Medical Education Here" ></textarea>

					</div>

				</div>

				<div class="form-group row">

					<label for="about" class="col-sm-3 text-right control-label col-form-label">About</label>

					<div class="col-sm-9">

					<textarea  class="form-control" name="about" id="about" placeholder="About Country" > </textarea>

					</div>

				</div>

				<div class="form-group row">

					<label for="place_of_attraction" class="col-sm-3 text-right control-label col-form-label">Place of attraction</label>

					<div class="col-sm-9">

					<textarea class="form-control" name="place_of_attraction" id="place_of_attraction" placeholder="Place of attraction Here" ></textarea>

					</div>

				</div>

				<div class="form-group row">

					<label for="food_hobbits" class="col-sm-3 text-right control-label col-form-label">Food hobbits</label>

					<div class="col-sm-9">

					<textarea class="form-control" name="food_hobbits" id="food_hobbits" placeholder="Food hobbits Here" ></textarea>

					</div>

				</div>

				<div class="form-group row">

					<label for="culture" class="col-sm-3 text-right control-label col-form-label">Culture</label>

					<div class="col-sm-9">

					<textarea class="form-control" name="culture" id="culture" placeholder="Culture Here" ></textarea>

					</div>

				</div>

				<div class="form-group row">

					<label for="weather" class="col-sm-3 text-right control-label col-form-label">Weather</label>

					<div class="col-sm-9">

					<textarea class="form-control" name="weather" id="weather" placeholder="Weather Here" ></textarea>

					</div>

				</div>

				<div class="form-group row">

					<label for="how_to_reach" class="col-sm-3 text-right control-label col-form-label">How to reach</label>

					<div class="col-sm-9">

					<textarea class="form-control" name="how_to_reach" id="how_to_reach" placeholder="How to reach" ></textarea>

					</div>

				</div>

				
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>

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


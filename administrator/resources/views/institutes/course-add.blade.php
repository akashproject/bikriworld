@extends('layouts.admin')



@section('content')

<div class="col-12">

	<div class="card">

		<form class="form-horizontal" method="post" action="{{ url('submitinstitutecourse') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Course</h4>
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
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Course Type</label>
					<div class="col-sm-9">
						<select name="course_id" id="course_id" >							
							<option value="">Select Course</option>
							@foreach($courses as $course)
							<option value="{{$course->id}}" > {{$course->course_name}}</option>
							@endforeach
						<select>
					</div>
				</div>	
				<div class="form-group row">
					<label for="course_name" class="col-sm-3 text-right control-label col-form-label">Course name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="course_name" id="course_name" placeholder="Course name Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="eligibility" class="col-sm-3 text-right control-label col-form-label">Eligibility</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="eligibility" id="title" placeholder="Eligibility Here" >

					</div>

				</div>
				<div class="form-group row">

					<label for="duration" class="col-sm-3 text-right control-label col-form-label">Duration</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="duration" id="duration" placeholder="Course Duration" >

					</div>

				</div>

				<div class="form-group row">

					<label for="last_enrolment_date" class="col-sm-3 text-right control-label col-form-label">Last enrolment date</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="last_enrolment_date" id="title" placeholder="Last enrolment date" >

					</div>

				</div>

				<div class="form-group row">

					<label for="seat" class="col-sm-3 text-right control-label col-form-label">Seat</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="seat" id="title" placeholder="Seat Number Here" >

					</div>

				</div>

				<div class="form-group row">

					<label for="fee" class="col-sm-3 text-right control-label col-form-label">Fees</label>

					<div class="col-sm-9">

						<input type="text" class="form-control" name="fee" id="fee" placeholder="Fee Amount" >

					</div>

				</div>

				
						
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden"  name="institute_id" value="{{$institute_id}}"  >
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


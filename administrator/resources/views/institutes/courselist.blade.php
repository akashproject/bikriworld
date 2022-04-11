@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($courses)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title">Basic Datatable</h5><a href="{{ url('add-institute-course') }}/{{ $institute_id }}" class="btn btn-primary btn-lg"> Add Course </a>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>

								<th>Course name</th>
								<th>Eligibility</th>
								<th>Duration</th>
								<th>Seat</th>
								<th>Last enrolment date</th>
								<th>Fees</th>
								<th>Options</th>
							</tr>

						</thead>

						<tbody>

							@foreach ($courses as $value)
							<tr>
								<td>{{ $value->course_name }}</td>
								<td>{{$value->eligibility }}</td>
								<td>{{$value->duration }}</td>
								<td>{{$value->seat }}</td>
								<td>{{$value->last_enrolment_date }}</td>
								<td>{{$value->fee }}</td>
								<td>
									<button type="button" class="btn btn-primary btn-lg">Edit</button>
									<button type="button" class="btn btn-danger btn-lg">Delete</button>
								</td>

							</tr>

							@endforeach							

						</tbody>

					</table>

				</div>



			</div>

		</div>

	@endif

</div>                   

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection


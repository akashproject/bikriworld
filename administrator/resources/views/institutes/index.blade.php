@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($institutes)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title">Basic Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>

								<th>Title</th>

								<th>Shortname</th>

								<th>Admin email</th>

								<th>Created Date</th>

								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($institutes as $value)

							<tr>

								<td>{{ $value->title }}</td>

								<td>{{$value->shortname }}</td>

								<td>{{$value->admin_email }}</td>

								<td> {{ $value->created_at->isoFormat('MMM DD, YYYY') }} </td>

								<td>
									<a href="{{ url('institute') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('institute-course') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Courses </a>
									<a href="{{ url('institute-course') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Albums </a>
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


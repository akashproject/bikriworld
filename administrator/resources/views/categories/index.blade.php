@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($categories)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>Icon</th>
								<th>Name</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($categories as $value)
							<tr>
								<td>{{ $value->icon }}</td>													
								<td>{{ $value->name }}</td>													
								<td>
								<a href="{{ url('category') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
								<a href="{{ url('delete-category') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
								<a href="{{ url('parts') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Parts</a>
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


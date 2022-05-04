@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($ages)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>Age List</th>
								<th>Deducted Amount</th>
								<th>Category</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($ages as $value)
							<tr>
								<td>{{ $value->age }}</td>												
								<td>{{ $value->deducted_amount }}</td>									
								<td>{{ $value->name }}</td>									
								<td>
								<a href="{{ url('device-age') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
								<a href="{{ url('age-delete') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?');">Delete </a>
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


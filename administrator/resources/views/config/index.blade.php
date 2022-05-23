@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($configs)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>Type</th>
								<th>Name</th>
								<th>Price</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($configs as $value)
							<tr>
								<td>{{ $value->type }}</td>													
								<td>{{ $value->value }}</td>
								<td>{{ $value->price }}</td>													
								<td>
								<a href="{{ url('config') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
								<a href="{{ url('delete-config') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')";>Delete </a>
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


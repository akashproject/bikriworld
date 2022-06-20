@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($conditions)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Deducted Amount</th>
								<th>Category</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($conditions as $value)
							<tr>
								<td>{{ $value->id }}</td>												
								<td>{{ $value->condition }}</td>												
								<td>{{ $value->deducted_amount }}</td>									
								<td>{{ $value->cat_name }}</td>									
								<td>
								<a href="{{ url('condition') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
								<a href="{{ url('condition-delete') }}/{{ $value->id }}" class="btn btn-danger btn-lg">Delete </a>
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


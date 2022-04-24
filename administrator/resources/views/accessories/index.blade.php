@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($accessories)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>Question</th>
								<th>Deducted Amount</th>
								<th>Category</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($accessories as $value)
							<tr>
								<td>{{ $value->name }}</td>												
								<td>{{ $value->deducted_amount }}</td>									
								<td>{{ $value->cat_name }}</td>									
								<td>
								<a href="{{ url('accessory') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
								<a href="{{ url('accessory-delete') }}/{{ $value->id }}" class="btn btn-danger btn-lg">Delete </a>
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


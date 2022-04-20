@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($products)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title">Basic Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>image</th>
								<th>Name</th>
								<th>Variant</th>
								<th>Max Price</th>
								<th>Created Date</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($products as $value)

							<tr>

								<td style="width:80px"><img src="/public/images/{{ $value->image }}" style="width:100%"></td>
								<td>{{ $value->name }}</td>
								<td>{{$value->variant }}</td>
								<td>{{$value->max_price }}</td>
								<td> {{ $value->created_at->isoFormat('MMM DD, YYYY') }} </td>
								<td>
									<a href="{{ url('product') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('product-delete') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')";>Delete </a>
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


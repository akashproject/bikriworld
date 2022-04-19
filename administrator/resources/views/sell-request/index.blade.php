@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($sellRequest)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>Name</th>
								<th>Mobile No</th>
								<th>Email</th>
								<th>Category</th>
								<th>Brand</th>
								<th>Product</th>
								<th>Ram Memory</th>
								<th>Storage Memory</th>
								<th>Request Placed Date</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($sellRequest as $value)
							<tr>
								<td>{{ $value->username }}</td>													
								<td>{{ $value->mobile }}</td>													
								<td>{{ $value->email }}</td>													
								<td>{{ $value->category_name }}</td>													
								<td>{{ $value->brand_name }}</td>													
								<td>{{ $value->name }}</td>													
								<td>{{ $value->ram }}</td>													
								<td>{{ $value->storage }}</td>													
								<td>{{ date("M d, Y",strtotime($value->created_at)) }}</td>
								
								<td>
								<a href="{{ url('sell-request') }}/{{ $value->id }}" class="btn btn-primary btn-lg">View</a>
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


@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($orders)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>Service No</th>
								<th>User</th>
								<th>Product</th>
								<th>Amount</th>
								<th>Payment Mode</th>
								<th>Order Placed Date</th>
								<th>Status</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($orders as $value)
							<tr>
								<td>{{ $value->service_no }}</td>													
								<td>{{ $value->user_fullname }}</td>													
								<td>{{ $value->product_name }}</td>													
								<td>{{ $value->amount }}</td>													
								<td>{{ $value->payment_mode }}</td>													
								<td>{{ date("M d, Y",strtotime($value->created_at)) }}</td>
								
								<td>{{ $value->status }}</td>
								<td>
								<a href="{{ url('order') }}/{{ $value->id }}" class="btn btn-primary btn-lg">View</a>
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


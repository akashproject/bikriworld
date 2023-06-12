@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($orders)

		<div class="card">

			<div class="card-body">

			@if(session()->has('message'))
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
			@endif
				<h5 class="card-title"> Datatable</h5>
				<form class="form-horizontal" method="post" action="{{ url('export-csv') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group row ">
						<div class="col-sm-4">
							<div class="form-group mt-3">
								<label
								>Start Date
									<small class="text-muted">dd/mm/yyyy</small></label>
								<input
								type="date"
								class="form-control date-inputmask"
								id="date-mask"
								name="startDate"
								placeholder="Enter Date"
								/>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group mt-3">
								<label
								>End Date
									<small class="text-muted">dd/mm/yyyy</small></label>
								<input
								type="date"
								class="form-control date-inputmask"
								id="date-mask"
								name="endDate"
								placeholder="Enter Date"
								/>
								<div class="form-group mt-3">
									<button type="submit" class="btn btn-primary">Export CSV</button>								
								</div>
							</div>
						</div>
						
					</div>
					<input type="hidden" name="table" id="table" value="orders" >
				</form>
				<div class="table-responsive">
					<div class="row">
						<div class="col-sm-12 col-md-6">
						</div>		
						<div class="col-sm-12 col-md-6">
							<form class="form-horizontal" method="get" action="{{ url('orders') }}">

								<div class="form-group row">
									<label for="search" class="col-sm-3 text-right control-label col-form-label">Search</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="search" id="search" placeholder="Search Word" >
									</div>
								</div>
							</form>
						</div>
					</div>
					<table id="" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>#ID</th>
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
								<td>{{ $value->order_id }}</td>													
								<td>{{ $value->service_no }}</td>													
								<td>{{ $value->user_fullname }}</td>													
								<td>{{ $value->product_name }}</td>													
								<td>{{ $value->amount }}</td>													
								<td>{{ $value->payment_mode }}</td>													
								<td>{{ date("M d, Y",strtotime($value->created_at)) }}</td>
								<td > 
									<span style="display:none" >
									{{$color = "" }}
									@if($value->status == 'cancelled')
										{{ $color = "red"}}
									@elseif($value->status == 'completed')
										{{ $color = "green"}}
									@else 
										{{ @$color = "blue"}}
									@endif
									</span>
									<span style="color:{{$color}}" > {{ $value->status }} </span>
								</td>
								<td>
								<a href="{{ url('order') }}/{{ $value->id }}" class="btn btn-primary btn-lg">View</a>
								</td>
							</tr>
							@endforeach							

						</tbody>

					</table>
				</div>

				{{ $orders->links() }}


			</div>

		</div>

	@endif

</div>                   

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection


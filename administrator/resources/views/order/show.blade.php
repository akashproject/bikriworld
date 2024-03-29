@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('saveorder') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<div class="text-right" >
<textarea id="copyTextContainer" style="display:none">Service No : {{ $order->service_no }}
Product Name : {{ $order->product_name }}
Product Variant : {{ $order->variation_type }}
Product Accessories : @foreach ($accessories as $accessory) {{ $accessory->name }}, @endforeach
Device Faults : @foreach ($questions as $key => $value) {{$key}} : {{ $value }}, @endforeach
Device Condition : {{ $condition->condition }}
Product Age : {{ $age->age }}

Selling Amount : Rs. {{ number_format($order->amount) }}/-
Payment Mode : {{ $order->payment_mode }}
Pickup Address : {{ $order->pickup_address }}, {{ $order->pickup_city }}, {{ $order->pickup_state }}, {{ $order->pincode }}
Pickup Schedule : {{ $order->pickup_schedule }}

Owner Name : {{ $order->user_fullname }}
Mobile : {{ $order->mobile }}
Email : {{ $order->email }}
</textarea>
					<button type="button" class="btn btn-primary" id="copyToClipBoard">Copy</button>
				</div>
				<h4 class="card-title"> Order Details </h4>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label"> Service No </label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $order->service_no }}</span >
					</div>
				</div>

				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> Product Info </h4>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $order->product_name }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Product Variant</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $order->variation_type }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Product Accessories</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						@foreach ($accessories as $accessory)
						<span >{{ $accessory->name }},</span >
						@endforeach		
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Device Faults</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						@foreach ($questions as $key => $value)
						<span > {{$key}} : {{ $value }} <br> </span >
						@endforeach		
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Device Condition</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $condition->condition }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Product Age</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $age->age }}</span >
					</div>
				</div>

				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> User Info </h4>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Owner Name</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $order->user_fullname }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Mobile No</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $order->mobile }}</span >
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $order->email }}</span >
					</div>
				</div>

				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> Order Info </h4>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Order Placed</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ date("M d, Y h:i:s",strtotime($order->created_at)) }} </span >
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Selling Amount</label>
					<div class="col-sm-5 text-left control-label col-form-label">
						<input type="text" class="form-control" name="amount" id="amount" placeholder="Title Here" value="{{ $order->amount }}">
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Payment Mode</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >Rs. {{ $order->payment_mode }} </span >
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Pickup Schedule</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $order->pickup_schedule }} </span >
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Pickup Address</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $order->pickup_address }}, {{ $order->pickup_city }}, {{ $order->pickup_state }}, {{ $order->pincode }} </span >
					</div>
				</div>

				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
					<div class="col-sm-4">
						<select name="status" id="status" >	
							<option value="">Update Status</option>
							<option value="pending" {{ ( $order->status ==  'pending' )? 'selected' : '' }} >Pending</option>
							<option value="paid" {{ ( $order->status ==  'paid' )? 'selected' : '' }} > Paid But Product Not Recived </option>
							<option value="pickuped" {{ ( $order->status ==  'pickuped' )? 'selected' : '' }}> Paid And Pickuped </option>
							<option value="cancelled" {{ ( $order->status ==  'cancelled' )? 'selected' : '' }}> Cancelled </option>
							<option value="completed" {{ ( $order->status ==  'completed' )? 'selected' : '' }}> Completed </option>
						<select>
					</div>
				</div>

				<div class="form-group row">
					<label for="product_unique_no" class="col-sm-3 text-right control-label col-form-label"> Unique No </label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<input type="text" name="product_unique_no" class="form-control"  id="product_unique_no" placeholder="Enter Unique No Here" >
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label"> Reason </label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<textarea name="reason" class="form-control"  id="reason" placeholder="Enter Reason Here" >{{ $order->reason }}</textarea>
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label"> Remarks </label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<textarea name="remarks" class="form-control"  id="remarks" placeholder="Enter Remarks Here" >{{ $order->remarks }}</textarea>
					</div>
				</div>

			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="order_id" id="order_id" value="{{ $order->order_id }}" >
				</div>

			</div>

		</form>

	</div>

</div>              

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection


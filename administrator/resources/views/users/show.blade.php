@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" action="">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Edit User #1</h4>
				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> Product Info </h4>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->name }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->email }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->mobile }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Alternative Contact No</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->alt_mobile }}</span >
					</div>
				</div>
				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> Address Details </h4>
				</div>
				<div class="form-group row text-right">
					<div class="col-sm-3">
						<label for="" class="text-left control-label col-form-label">Address</label>
					</div>
					<div class="col-sm-6">
						
					</div>
				</div>
				<div class="form-group row ">
					<label for="" class="col-sm-3 text-right control-label col-form-label"></label>
					<div class="col-md-9 productVarientWrap" >
						@foreach($addressess as $key => $address)
							<div class="row" style="margin:20px 0" >
								{{$key + 1}}. {{$address->address_1}}, {{$address->city}}, {{$address->state}}, {{$address->pincode}}, {{$address->landmark}}
							</div>
						@endforeach
					</div>
				</div>
				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> Payment Info </h4>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Bank Account No</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $payment->account_no }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 text-right control-label col-form-label">Branch Name</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $payment->bank_name }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Account Holder Name </label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $payment->account_holder_name }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">IFSC Code</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $payment->ifsc_code }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Upi id</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $payment->upi_id }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Online Payment Number</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $payment->online_payment_no }}</span >
					</div>
				</div>
				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> Earning </h4>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">BW Coins</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $user->earning }}</span >
					</div>
				</div>
			</div>
			<!-- <div class="border-top">
				<div class="card-body">
					<button type="button" class="btn btn-primary">Submit</button>
				</div>
			</div> -->
		</form>
		<form class="form-horizontal" method="post" action="{{ url('save-user') }}" enctype="multipart/form-data">
			@csrf
			<div class="border-top">
				<div class="card-body">
					<button type="submit" onclick="return confirm('Are you sure to success');" class="btn btn-primary">Complete Withdrawal </button>
					<input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}" >
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

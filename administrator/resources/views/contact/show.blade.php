@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('savequary') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Quary Details </h4>
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
					<label for="name" class="col-sm-3 text-right control-label col-form-label"> Name</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $contact->name }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $contact->email }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Subject</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $contact->subject }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Message</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $contact->message }}</span >
					</div>
				</div>

				

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Order Placed</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ date("M d, Y h:i:s",strtotime($contact->created_at)) }} </span >
					</div>
				</div>

				

				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
					<div class="col-sm-4">
						<select name="status" id="status" >	
							<option value="">Update Status</option>
							<option value="pending" {{ ( $contact->status ==  'pending' )? 'selected' : '' }} >Pending</option>
							<option value="solved" {{ ( $contact->status ==  'solved' )? 'selected' : '' }} > Solved </option>
						<select>
					</div>
				</div>

			</div>

			<div class="bcontact-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="id" id="id" value="{{ $contact->id }}" >
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


@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" action="">
		
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Edit User #1</h4>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="name" placeholder="Name Here" value="{{$user->name}}">
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" id="email" placeholder="Email Here" value="{{$user->email}}">
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="mobile" placeholder="Contact No " value="{{$user->mobile}}">
					</div>
				</div>
				<div class="form-group row">
					<label for="physical_status" class="col-sm-3 text-right control-label col-form-label">Physical Status</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="physical_status" placeholder="Physical Status " value="{{$user->physical_status}}">
					</div>
				</div>
				<div class="form-group row">
					<label for="score" class="col-sm-3 text-right control-label col-form-label">Score</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="score" placeholder="Score" value="{{$user->score}}">
					</div>
				</div>
				<div class="form-group row">
					<label for="cast" class="col-sm-3 text-right control-label col-form-label">Cast</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="cast" placeholder="Cast" value="{{$user->cast}}">
					</div>
				</div>
				<div class="form-group row">
					<label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="gender" placeholder="Gender " value="{{$user->gender}}">
					</div>
				</div>
			</div>
			<div class="border-top">
				<div class="card-body">
					<button type="button" class="btn btn-primary">Submit</button>
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

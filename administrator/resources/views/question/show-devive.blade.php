@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('save-device-age') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Device Age </h4>
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
					<label for="age" class="col-sm-3 text-right control-label col-form-label">Device Age</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="age" id="age" placeholder="Enter Question Here"value="{{ $age->age }}">
					</div>
				</div>
				<div class="form-group row">
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Deducted Amount</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" name="deducted_amount" id="title" placeholder="Enter Deducted Amount Here" value="{{ $age->deducted_amount }}">
					</div>
				</div>	
				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Category</label>
					<div class="col-sm-9">
						<select name="category_id" id="category_id" >
							<option value="">Select Category</option>
							@foreach($categories as $key => $category)
							<option value="{{$category->id}}" {{ ( $age->category_id ==  $category->id )? 'selected' : '' }} > {{$category->name}}</option>
							@endforeach
						<select>
					</div>
				</div>	
				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Brand</label>
					<div class="col-sm-9">
						<select name="brand_id[]" id="brand_id"  multiple>
							<option value="">Select Brand</option>
							@foreach($brands as $key => $brand)
							<option value="{{$brand->id}}" {{ (in_array($brand->id,  $age->brand_id))?'selected' : '' }} > {{$brand->name}}</option>
							@endforeach
						<select>
					</div>
				</div>	
				<div class="form-group row">
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Extra Brand Amount</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" name="extra_deducted_amount" id="title" placeholder="Enter Deducted Amount Here" value="{{ $age->extra_deducted_amount }}">
					</div>
				</div>					
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="age_id" id="age_id" value="{{ $age->id }}" >
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


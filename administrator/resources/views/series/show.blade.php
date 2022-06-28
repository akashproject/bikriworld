@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submitseries') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Edit Brand </h4>
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
					<label for="series" class="col-sm-3 text-right control-label col-form-label">Series Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="series" id="series" placeholder="Brand Name Here" value="{{ $series->series }}" >
					</div>
				</div>
				
				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Category</label>
					<div class="col-sm-9">
						<select name="category_id" id="category_id" class="select2 form-control custom-select" style="width: 100%;">	
							<option value="">Select Category</option>
							@foreach($categories as $category)
							<option value="{{$category->id}}"  {{ ( $category->id ==  $series->category_id) ?'selected' : '' }} > {{$category->name}}</option>
							@endforeach
						<select>
					</div>
				</div>

				<div class="form-group row">
					<label for="brand" class="col-sm-3 text-right control-label col-form-label">Brand</label>
					<div class="col-sm-9">
						<select name="brand_id" id="brand_id" class="select2 form-control custom-select" style="width: 100%;" >
							<option value="">Select Brand</option>
							@foreach($brands as $brand)
							<option value="{{$brand->id}}"  {{ ($brand->id== $series->brand_id)?'selected' : '' }} > {{$brand->name}}</option>
							@endforeach
						<select>
					</div>
				</div>		
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="series_id" id="series_id" value="{{ $series->id }}" >
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


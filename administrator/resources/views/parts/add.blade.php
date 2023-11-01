@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submitparts') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Parts </h4>
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
					<label for="category" class="col-sm-3 text-right control-label col-form-label">Category</label>
					<div class="col-sm-9">
						<select name="category_id" id="category_id" class="select2 form-control custom-select" >
							<option value="">Select Category</option>
							@foreach($categories as $category)
							<option value="{{$category->id}}" > {{$category->name}}</option>
							@endforeach
						<select>
					</div>
				</div>
				<div class="form-group row">
					<label for="icon" class="col-sm-3 text-right control-label col-form-label">Parts Icon</label>
					<div class="col-md-9">
						<div class="custom-file">
							<input type="text" class="form-control" name="icon" id="validatedCustomFile" required>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Parts Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" id="name" placeholder="Enter name Here" >
					</div>
				</div>		
				<div class="form-group row">
					<label for="price" class="col-sm-3 text-right control-label col-form-label">Price</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="price" id="price" placeholder="Enter Price Here" >
					</div>
				</div>
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="parts_id" id="parts_id" value="" >
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


@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submitbrand') }}" enctype="multipart/form-data">
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
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Image</label>
					<div class="col-md-9">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="image" id="validatedCustomFile">
							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
							<div class="invalid-feedback">Example invalid custom file feedback</div>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Brand Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" id="name" placeholder="Brand Name Here" value="{{ $brand->name }}" >
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Brand Slug</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="slug" id="slug" placeholder="Title Here" value="{{ $brand->slug }}">
					</div>
				</div>

				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Category</label>
					<div class="col-sm-9">
						<select name="category_id[]" id="category_id"  multiple>	
							<option value="">Select Category</option>
							@foreach($categories as $category)
							<option value="{{$category->id}}"  {{ (in_array($category->id,  $brand->category_id))?'selected' : '' }} > {{$category->name}}</option>
							@endforeach
						<select>
					</div>
				</div>
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="brand_id" id="brand_id" value="{{ $brand->id }}" >
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


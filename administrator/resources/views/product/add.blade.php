@extends('layouts.admin')



@section('content')

<div class="col-12">

	<div class="card">

		<form class="form-horizontal" method="post" action="{{ url('submitproduct') }}" enctype="multipart/form-data">

			@csrf

			<div class="card-body">

				<h4 class="card-title"> Add Product</h4>

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
					<label for="image" class="col-sm-3 text-right control-label col-form-label">Product Photo</label>
					<div class="col-md-9">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="image" id="validatedCustomFile" required>
							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
							<div class="invalid-feedback">Example invalid custom file feedback</div>
						</div>
					</div>
				</div>


				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" id="name" placeholder="Name Here" >
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Slug</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug Here" >
					</div>
				</div>

				<!-- <div class="form-group row">
					<label for="type" class="col-sm-3 text-right control-label col-form-label">Type</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="type" id="title" placeholder="type Here" >
					</div>
				</div>
				 -->

				<div class="form-group row">
					<label for="max_price" class="col-sm-3 text-right control-label col-form-label">Maximum Selling Price</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="max_price" id="title" placeholder="Enter Maximum Selling Price Here" >
					</div>
				</div>

				<div class="form-group row">
					<label for="category" class="col-sm-3 text-right control-label col-form-label">Category</label>
					<div class="col-sm-9">
						<select name="category_id" id="category_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
							<option value="">Select Category</option>
							@foreach($categories as $category)
							<option value="{{$category->id}}" > {{$category->name}}</option>
							@endforeach
						<select>
					</div>
				</div>	

				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Brands</label>
					<div class="col-sm-9">
						<select name="brand_id" id="brand_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
							<option value="">Select Brand</option>
							@foreach($brands as $brand)
							<option value="{{$brand->id}}" > {{$brand->name}}</option>
							@endforeach
						<select>
					</div>
				</div>	
				<div class="form-group row text-right">
					<div class="col-sm-3">
						<label for="" class="text-left control-label col-form-label">Product Varient</label>
					</div>
					<div class="col-sm-6">
						<a href="javascript:void(0)" class="addMoreProductVarient btn btn-primary" > Add More </a>
					</div>
				</div>

				<div class="form-group row ">
					<label for="" class="col-sm-3 text-right control-label col-form-label"></label>
					<div class="col-md-9 productVarientWrap" >
						<div class="row productVarient" >
							<div class="col-sm-3">
								<input type="text" class="form-control" name="ram[]" id="" placeholder="Ram Memory Here" value="" >
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="storage[]" id="" placeholder="Storage Memory Here" value="" >
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="price[]" id="" placeholder="Variation Price" value="" >
							</div>
							<div class="col-sm-3">
								<a href="javascript:void(0)" class="removeProductVarient" > <i class="mdi mdi-delete" aria-hidden="true" style="font-size: 20px;color: red;"></i>
 								</a>
							</div>
						</div>
					</div>
				</div>	
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="product_id" id="product_id" value="" >
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


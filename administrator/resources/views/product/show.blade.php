@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submitproduct') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body productFormField">
				<h4 class="card-title"> Edit Product </h4>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<div class="form-group row ">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Series</label>
					<div class="col-sm-9">
						<select name="series_id" id="series_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
							<option value="">Select Series</option>
							@foreach($serieses as $series)
							<option value="{{$series->id}}"  {{ ( $product->series_id ==  $series->id )? 'selected' : '' }} > {{$series->series}}</option>
							@endforeach
						<select>
					</div>
				</div>

				<div class="form-group row">
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Product Image</label>
					<div class="col-md-9">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="image" id="validatedCustomFile">
							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
							<div class="invalid-feedback">Example invalid custom file feedback</div>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" id="name" placeholder="Title Here" value="{{ $product->name }}" >
					</div>
				</div>


				<div class="form-group row">
					<label for="max_price" class="col-sm-3 text-right control-label col-form-label">Max Selling Price</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="max_price" id="max_price" placeholder="Title Here" value="{{ $product->max_price }}" >
					</div>
				</div>
				<div class="form-group row">
					<label for="category" class="col-sm-3 text-right control-label col-form-label">Category</label>
					<div class="col-sm-9">
						<select name="category_id" id="category_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
							<option value="">Select Category</option>
							@foreach($categories as $category)
							<option value="{{$category->id}}" {{ ( $product->category_id ==  $category->id )? 'selected' : '' }}> {{$category->name}}</option>
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
							<option value="{{$brand->id}}" {{ ( $product->brand_id ==  $brand->id )? 'selected' : '' }} > {{$brand->name}}</option>
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
						@if($product->variant != '')
						@foreach(json_decode($product->variant) as $variant)
						<div class="row productVarient" >
							<div class="col-sm-3">
								<input type="text" class="form-control" name="ram[]" id="" placeholder="Ram Memory Here" value="{{ $variant->ram }}" >
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="storage[]" id="" placeholder="Storage Memory Here" value="{{ $variant->storage }}" >
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="price[]" id="" placeholder="Variation Price" value="{{ $variant->price }}" >
							</div>
							<div class="col-sm-3">
								<a href="javascript:void(0)" class="removeProductVarient" > <i class="mdi mdi-delete" aria-hidden="true" style="font-size: 20px;color: red;"></i>
 								</a>
							</div>
						</div>
						@endforeach
						@else 
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
						@endif
					</div>
				</div>

			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}" >
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


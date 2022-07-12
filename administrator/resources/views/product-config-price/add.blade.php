@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submit-product-config-price') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Product Configuration Price </h4>
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
					<label for="config_id" class="col-sm-3 text-right control-label col-form-label">Configuration</label>
					<div class="col-sm-9">
						<select name="config_id" id="config_id" class="select2 form-control custom-select" style="width: 100%;" >
							<option value="">Select Configuration</option>
							@foreach($configs as $config)
							<option value="{{$config->id}}" > {{$config->value}}</option>
							@endforeach
						<select>
					</div>
				</div>

				<div class="form-group row">
					<label for="product_id" class="col-sm-3 text-right control-label col-form-label"> Product </label>
					<div class="col-sm-9">
						<select name="product_id" id="product_id" class="select2 form-control custom-select" style="width: 100%;">
							<option value="">Select Product</option>
							@foreach($products as $product)
							<option value="{{$product->id}}" > {{$product->name}}</option>
							@endforeach
						<select>
					</div>
				</div>
				
				<div class="form-group row">
					<label for="price" class="col-sm-3 text-right control-label col-form-label">Price</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="price" id="price" placeholder="Price Here" >
					</div>
				</div>

			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="product_config_price_id" id="product_config_price_id" value="" >
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


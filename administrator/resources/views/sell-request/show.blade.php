@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('saveorder') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Selling Information </h4>
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
					<label for="name" class="col-sm-3 text-right control-label col-form-label"> Device Category </label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $sellRequest->category_name }}</span >
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label"> Brand Name </label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $sellRequest->brand_name }}</span >
					</div>
				</div>

				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> Product Info </h4>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $sellRequest->name }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Ram Memory</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $sellRequest->ram }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Storage Memory</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $sellRequest->storage }}</span >
					</div>
				</div>

				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> Seller Info </h4>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label"> Name</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $sellRequest->username }}</span >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Mobile No</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $sellRequest->mobile }}</span >
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span >{{ $sellRequest->email }}</span >
					</div>
				</div>
				<div class="form-group row">
					<h4  class="col-sm-2 text-right"> Device Condition </h4>
				</div>

				@foreach ($question_ans as $key => $value)
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label"></label>
					<div class="col-sm-9 text-left control-label col-form-label">
						<span > {{$key +1 }}. {{ $value['question'] }} <br> Ans : <strong> {{ ($value['answer']) == '1'?"Yes":"No" }} </strong></span >
					</div>
				</div>

				@endforeach	
			</div>

			<div class="border-top">

				

			</div>

		</form>

	</div>

</div>              

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection


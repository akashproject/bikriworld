@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submitquestion') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Question </h4>
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
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Question</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="question" id="title" placeholder="Enter Question Here" >
					</div>
				</div>
				<div class="form-group row">
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Description</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="description" id="title" placeholder="Enter description Here" ></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Deducted Amount</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" name="deducted_amount" id="title" placeholder="Enter Deducted Amount Here" >
					</div>
				</div>	
				<div class="form-group row">
					<label for="state" class="col-sm-3 text-right control-label col-form-label">Category</label>
					<div class="col-sm-9">
						<select name="category_id" id="category_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
							<option value="">Select Category</option>
							@foreach($categories as $category)
							<option value="{{$category->id}}" > {{$category->name}}</option>
							@endforeach
						<select>
					</div>
				</div>					
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="question_id" id="question_id" value="" >
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


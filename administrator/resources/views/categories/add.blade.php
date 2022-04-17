@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submitcategories') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Category </h4>
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
					<label for="icon" class="col-sm-3 text-right control-label col-form-label">Icon</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="icon" id="icon" placeholder="Icon Name Here" >
					</div>
				</div>

				<div class="form-group row">
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" id="title" placeholder="Title Here" >
					</div>
				</div>
											
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="category_id" id="category_id" value="" >
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


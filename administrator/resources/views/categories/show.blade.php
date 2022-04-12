@extends('layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('submitcategories') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Edit Category </h4>
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
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" id="name" placeholder="Title Here" value="{{ $category->name }}" >
					</div>
				</div>

			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="category_id" id="category_id" value="{{ $category->id }}" >
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


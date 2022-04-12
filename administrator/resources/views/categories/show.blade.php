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
					<label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" value="{{ $category->title }}" >
					</div>
				</div>
				
				<div class="form-group row">
					<label for="description" class="col-sm-3 text-right control-label col-form-label"> Description </label>
					<div class="col-sm-9">
						<textarea class="form-control" name="description" id="description" placeholder="Description Here" > {{ $category->description }} </textarea>
					</div>
				</div>

				<div class="form-group row">
					<label for="venue" class="col-sm-3 text-right control-label col-form-label"> Venue </label>
					<div class="col-sm-9">
						<textarea class="form-control" name="venue" id="venue" placeholder="Venue Here" >  {{ $category->venue }}  </textarea>
					</div>
				</div>	
				
				<div class="form-group row">
					<label for="date" class="col-sm-3 text-right control-label col-form-label">Date </label>
					<div class="col-sm-9">
						<textarea class="form-control" name="date" id="date" placeholder="Date Here" >  {{ $category->date }}  </textarea>
					</div>
				</div>	

				<div class="form-group row">
					<label for="time" class="col-sm-3 text-right control-label col-form-label">Time </label>
					<div class="col-sm-9">
						<textarea class="form-control" name="time" id="time" placeholder="Time Here" >  {{ $category->time }}  </textarea>
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


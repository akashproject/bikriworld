@extends('layouts.admin')
@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('save-product-parts') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body productFormField">
				<h4 class="card-title"> Parts List for # {{ $product->name }}</h4>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				@if(session()->has('message'))
					<div class="alert alert-success">
						{{ session()->get('message') }}
					</div>
				@endif
				<div class="form-group row ">
                    @if($parts != '')
                    @foreach($parts as $part)
                    <div class="col-md-4 productVarientWrap" >
                        <div class="row productVarient" >
                            <label for="parts" class="col-sm-6 text-right control-label col-form-label"> {{$part->name}} </label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="parts[{{$part->id}}]" id="" placeholder="Enter Price Here" value="{{ array_key_exists($part->id,$product->parts)?$product->parts[$part->id]:'' }}" >
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
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
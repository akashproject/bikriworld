@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($products)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title">Basic Datatable</h5>
				<div class="card-title">
					<form class="form-inline" action="{{ url('products')}}">
						<div class="form-group">
							<label for="name">Search Product </label>
							<input type="text" name="name" class="form-control" id="product">
						</div>
						<button type="submit" class="btn btn-default">Go</button>
					</form>
				</div>

				<div class="table-responsive">

					<table id="" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>image</th>
								<th>Name</th>
								<th>Max Price</th>
								<th>Created Date</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>
							@foreach ($products as $value)
							<tr>
								<td style="width:80px"><img src="{{ url('/public/images')}}/{{ $value->image }}" style="width:100%"></td>
								<td>{{ $value->name }}</td>
								<td>{{$value->max_price }}</td>
								<td> {{ $value->created_at->isoFormat('MMM DD, YYYY') }} </td>
								<td>
									<a href="{{ url('product-parts') }}/{{ $value->id }}" class="btn btn-primary btn-lg"> Parts </a>
									<a href="{{ url('product') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('product-delete') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')";>Delete </a>
								</td>
							</tr>
							@endforeach							
						</tbody>

					</table>

				</div>
				<div class="d-flex justify-content-center">
					{!! $products->links() !!}
				</div>


			</div>

		</div>

	@endif

</div>                   

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection


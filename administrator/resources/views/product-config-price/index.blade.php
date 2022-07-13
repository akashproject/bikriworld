@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($productConfigPrices)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>Config</th>
								<th>Product</th>
								<th>Price</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($productConfigPrices as $value)
							<tr>												
								<td>{{ $value->value }}</td>													
								<td>{{ $value->product_name }}</td>													
								<td>{{ $value->config_price }}</td>													
								<td>
									<a href="{{ url('product-config-price') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('delete-product-config-price') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?');">Delete </a>
								</td>
							</tr>
							@endforeach							

						</tbody>

					</table>

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


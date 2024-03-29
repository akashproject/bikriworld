@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($brands)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>
							<tr>
								<th>Logo</th>
								<th>Name</th>
								<th>Options</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($brands as $value)
							<tr>
								<td style="width:80px"><img src="{{ url('public/images')}}/{{ $value->image }}" style="width:100%"></td>													
								<td>{{ $value->name }}</td>													
								<td>
								<a href="{{ url('brand') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
								<a href="{{ url('delete-brand') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')";>Delete </a>
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


@extends('layouts.admin')

@section('content')
<div class="col-12">
	@if($users)
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Basic Datatable</h5>
				<div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Join date</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $value)
							<tr>
								<td>{{ $value->name }}</td>
								<td>{{$value->email }}</td>
								<td>{{$value->mobile }}</td>
								<td> {{ $value->created_at->isoFormat('MMM DD, YYYY') }} </td>
								<td>
									<button type="button" class="btn btn-primary btn-lg">View</button>
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

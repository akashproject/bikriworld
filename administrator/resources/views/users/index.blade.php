@extends('layouts.admin')

@section('content')
<div class="col-12">
	@if($users)
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Basic Datatable</h5>
				<div class="table-responsive">
					<div class="row">
						<div class="col-sm-12 col-md-6">
						</div>		
						<div class="col-sm-12 col-md-6">
							<form class="form-horizontal" method="get" action="{{ url('users') }}">
								<div class="form-group row">
									<label for="search" class="col-sm-3 text-right control-label col-form-label">Search</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="search" id="search" placeholder="Search Word" >
									</div>
								</div>
							</form>
						</div>
					</div>
					<table id="" class="table table-striped table-bordered">
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
									<a href="{{ url($slug) }}/{{ $value->id }}" class="btn btn-primary btn-lg">View</a>
								</td>
							</tr>
							@endforeach							
						</tbody>
					</table>
				</div>
				{{ $users->links() }}
			</div>
		</div>
	@endif
</div>                   
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection

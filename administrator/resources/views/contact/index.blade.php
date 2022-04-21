@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($contacts)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>
								<th>Name</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Subject</th>
								<th>Message</th>
								<th>Quary Placed Date</th>
								<th>Status</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($contacts as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->mobile }}</td>													
								<td>{{ $value->email }}</td>													
								<td>{{ $value->subject }}</td>													
								<td>{{ $value->message }}</td>																				
								<td>{{ date("M d, Y",strtotime($value->created_at)) }}</td>
								<td>{{ $value->status }}</td>	
								<td>
								<a href="{{ url('quary') }}/{{ $value->id }}" class="btn btn-primary btn-lg">View</a>
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


@extends('layouts.admin')



@section('content')

<div class="col-12">

	@if($countries)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title">Basic Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>

							<tr>

								<th>Name</th>

								<th>Code</th>

								<th>Currency</th>

								<th>Medicaleducation</th>

								<th>Alace of attraction</th>
								<th>Food hobbits</th>
								<th>Culture</th>
								<th>Weather</th>
								<th>How to reach</th>
								<th>Created Date</th>
								<th>Options</th>

							</tr>

						</thead>

						<tbody>

							@foreach ($countries as $value)
							<tr>
								<td>{{ $value->name }}</td>
								<td>{{$value->code }}</td>
								<td>{{$value->currency }}</td>
								<td>{{$value->medicaleducation }}</td>
								<td>{{$value->about }}</td>
								<td>{{$value->place_of_attraction }}</td>
								<td>{{$value->food_hobbits }}</td>
								<td>{{$value->culture }}</td>
								<td>{{$value->weather }}</td>
								<td>{{$value->how_to_reach }}</td>								
								<td> {{ $value->created_at->isoFormat('MMM DD, YYYY') }} </td>
								<td>
									<button type="button" class="btn btn-primary btn-lg">Edit</button>
									<button type="button" class="btn btn-danger btn-lg">Delete</button>
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


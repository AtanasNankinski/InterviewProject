@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-2">
			<div class="container-fluid mt-5">
        <a class="add-button rounded-pill" href="information/addinfo">Add/Redact</a>
      </div>
		</div>
		<div class="col-8">
			<table class="table">
  			<thead>
    			<tr>
      				<th scope="col">ID</th>
      				<th scope="col">First</th>
      				<th scope="col">Last</th>
      				<th scope="col">Phone Number</th>
      				<th scope="col">Department</th>
      				<th scope="col">Position</th>
      				<th scope="col">Salary[BGN]</th>
    			</tr>
  			</thead>
  			<tbody>
  				@foreach($employees as $emp)
    			<tr>
      				<th scope="row">{{ $emp->id }}</th>
      				<td>{{ $emp->firstName }}</td>
      				<td>{{ $emp->lastName }}</td>
      				<td>{{ $emp->phoneNum }}</td>
      				<td>{{ $emp->department }}</td>
      				<td>{{ $emp->position }}</td>
      				<td>{{ $emp->salary }}</td>
    			</tr>
    			@endforeach
  			</tbody>
			</table>
		</div>
		<div class="col-2">
			
		</div>
	</div>
</div>


@endsection
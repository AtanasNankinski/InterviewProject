@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-1">
			
		</div>

		<!-- Container for the form adding employee information -->
		<div class="col-4">
			<form action="addEmployee" method="POST">
				@csrf
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">First Name</label>
					<input type="text" name="firstName" class="form-control" required>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Last Name</label>
					<input type="text" name="lastName" class="form-control" required>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Phone Number</label>
					<input type="text" name="phoneNum" class="form-control" required>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Department</label>
					<input type="text" name="department" class="form-control" required>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Position</label>
					<input type="text" name="position" class="form-control" required>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Salary</label>
					<input type="number" name="salary" class="form-control" required>
				</div>
				<button type="submit" name="inserInfo" class="btn btn-primary">Add</button>
			</form>
		</div>

		<div class="2">
			
		</div>

		<!-- Container for the form redacting employee information -->
		<div class="col-4">
			
		</div>

		<div class="col-1">
			
		</div>
	</div>
</div>

@endsection
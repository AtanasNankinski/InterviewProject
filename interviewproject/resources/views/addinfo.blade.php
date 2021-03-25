@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-1">
			
		</div>

		<!-- Container for the form adding employee information -->
		<div class="col-3">
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
				<button type="submit" name="insertInfo" class="btn btn-primary">Add</button>
			</form>
			@if(!empty(session('message')) && session('message') == 'insertSucc')

			<div class="alert alert-success" role="alert">
  				Data inserted successesfully!
			</div>

			@elseif(!empty(session('message')) && session('message') == 'insertEmpty')

			<div class="alert alert-danger" role="alert">
  				There are empty fields!
			</div>

			@endif
		</div>

		<div class="col-1">
			
		</div>

		<div class="col-2">
			<form action="deleteEmp" method="POST">
				@csrf
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">ID</label>
					<input type="number" name="empId" class="form-control" required>
				</div>
				<button type="submit" name="deleteInfo" class="btn btn-primary">Delete</button>
			</form>
			@if(!empty(session('message')) && session('message') == 'deleteSucc')
			<div class="alert alert-success" role="alert">
  				Employee info deleted successesfully!
			</div>
			@elseif(!empty(session('message')) && session('message') == 'deleteEmpty')
			<div class="alert alert-danger" role="alert">
  				Field is empty!
			</div>
			@endif
		</div>

		<div class="col-1">
			
		</div>

		<!-- Container for the form redacting employee information -->
		<div class="col-3">
			<form action="redactEmp" method="POST">
				@csrf
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">ID</label>
					<input type="number" name="empId" class="form-control" required>
				</div>
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
				<button type="submit" name="redactInfo" class="btn btn-primary">Redact</button>
			</form>

			@if(!empty(session('message')) && session('message') == 'redactSucc')
			<div class="alert alert-success" role="alert">
  				Employee info redacted successesfully!
			</div>
			@elseif(!empty(session('message')) && session('message') == 'redactEmpty')
			<div class="alert alert-danger" role="alert">
  				There are empty fields!
			</div>
			@endif

		</div>

		<div class="col-1">
			
		</div>
	</div>
</div>

@endsection
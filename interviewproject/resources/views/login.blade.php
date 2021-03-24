@extends('layouts.app')

@section('content')

<h1>Login Page</h1>

<form action="user" method="POST">
	@csrf
  	<div class="mb-3">
    	<label for="exampleInputEmail1" class="form-label">Email address</label>
    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  	</div>
  	<div class="mb-3">
    	<label for="exampleInputPassword1" class="form-label">Password</label>
    	<input type="password" name="password" class="form-control" id="exampleInputPassword1">
  	</div>
  	<button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>

@endsection
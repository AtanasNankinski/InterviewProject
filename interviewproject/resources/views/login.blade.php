@extends('layouts.app')

@section('content')

<h1>Login Page</h1>

<form action="user" method="POST">
	@csrf
  	<div class="mb-3">
    	<label for="exampleInputEmail1" class="form-label">Email address</label>
    	<input type="email" name="email" class="form-control" required>
  	</div>
  	<div class="mb-3">
    	<label for="exampleInputPassword1" class="form-label">Password</label>
    	<input type="password" name="password" class="form-control" required>
  	</div>
  	<button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>

@if(session('message') == 'yes')
    <div class="alert alert-success">
        Succ
    </div>
@elseif(session('message') == 'email')
    <div class="alert alert-success">
        Email
    </div>
@elseif(session('message') == 'password')
    <div class="alert alert-success">
        Pass
    </div>
@endif

@endsection
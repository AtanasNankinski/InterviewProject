<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<title>InterviewProject</title>
</head>
<body>

<!-- Navbar -->
<ul class="nav justify-content-end">
  	<li class="nav-item">
    	<a class="nav-link active" aria-current="page" href="/">Home</a>
  	</li>
  	@empty(session('user'))
  	<li class="nav-item">
    	<a class="nav-link" href="/login">Login</a>
  	</li>
  	@endempty

  	@if(session()->has('user'))
  	<li class="nav-item">
      <a class="nav-link" href="/information">Information</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/logout">Logout</a>
    </li>
    @endif
</ul>
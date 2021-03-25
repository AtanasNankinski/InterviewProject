@extends('layouts.app')

@section('content')

@if(!empty(session('message')) && session('message') == 'loggedOut')
<div class="alert alert-success" role="alert">
  	Logged out!
</div>
@elseif(!empty(session('message')) && session('message') == 'loggedIn')
<div class="alert alert-success" role="alert">
  	Logged in!
</div>
@endif

<h1>Interview Project</h1>

<div class="container text-wrapper">
	<div class="row">
		<div class="col-4 text-holders">
			<div class="p-3 border info bg-light">
				<h2>
					Information 1
				</h2>
				<p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
			</div>
		</div>
		<div class="col-4 text-holders">
			<div class="p-3 border info bg-light">
				<h2>
					Information 2
				</h2>
				<p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
			</div>
		</div>
		<div class="col-4 text-holders">
			<div class="p-3 border info bg-light">
				<h2>
					Information 3
				</h2>
				<p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
			</div>
		</div>
	</div>
</div>

@endsection
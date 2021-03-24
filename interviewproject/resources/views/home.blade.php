@extends('layouts.app')

@section('content')

<h1>Home</h1>

@if(session()->has('user'))
<p>Logged in</p>
@else 
<p>Not logged</p>
@endif

@empty(session('user'))
<p>Not logged in by empty</p>
@endempty

@endsection
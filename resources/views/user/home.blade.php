@extends('layout.base') 


@section('content')
<h1>Hello User</h1>

<a href="{{ route('user.logout') }}">Logout</a>






@endsection
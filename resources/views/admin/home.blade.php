@extends('layout.base') 


@section('content')
<h1>Hello Admin</h1>

<a href="{{ route('admin.logout') }}">Logout</a>






@endsection
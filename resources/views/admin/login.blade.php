@extends('layout.base') 


@section('content')

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

<form action="{{ route('admin.handleLogin') }}" method="POST">
    @csrf
    <input type="text" name="email" />
    <input type="password" name="password" />
    <button type="submit">Log in</button>
</form>





@endsection
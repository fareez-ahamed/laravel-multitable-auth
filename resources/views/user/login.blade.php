@extends('layout.base') 


@section('content')

<form action="{{ route('user.handleLogin') }}" method="POST">
    @csrf
    <input type="text" name="email" />
    <input type="password" name="password" />
    <button type="submit">Log in</button>
</form>





@endsection
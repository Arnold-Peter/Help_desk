@extends('layout.app')
@section('content')
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="">email</label>
        <input type="email" name="email" id="">
    </div>
    <div>
        <label for="">password</label>
        <input type="password" name="password" id="">
    </div>
    <div>
        <a href="{{ route('registration') }}">register</a>
    </div>
    <div>
        <button type="submit">login</button>
    </div>
    <a href="{{route('Staff_dashboard')}}">staff</a>
     <a href="{{route('admin_dashboard')}}">admin</a>
     <a href="{{route('Stafflist_dashboard')}}">Staff-list</a>
</form>
@endsection

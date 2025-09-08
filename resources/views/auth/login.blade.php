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
     <a href="{{route('admin_dashboard')}}">dashboard</a>
     <a href="{{route('Add_User')}}">admin-add</a>
     <a href="{{route('Profile')}}">profile</a>
     <a href="{{route('Report')}}">report</a>
</form>
@endsection

@extends('layout.app')
@section('content')
<div class="bg-dark text-white vh-100 p-3" style="width: 250px;">
    <h4 class="mb-4">Dashboard</h4>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="{{ route('home') }}"> Home</a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="{{ route('profile') }}">Profile</a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="{{ route('settings') }}">Settings</a>
        </li>                                                  
    </ul>
</div>
<style>
        body { margin: 0; }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
        }
        .sidebar a.active {
            font-weight: bold;
            background-color: #495057;
        }
    </style>

@endsection
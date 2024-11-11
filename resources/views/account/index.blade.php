@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Account</h1>
    
    <div class="card">
        <div class="card-header">
            Account Details
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">Email: {{ $user->email }}</p>
            
            @if ($user->profile_picture)
                <img src="{{ asset('storage/'.$user->profile_picture) }}" alt="Profile Picture" class="img-thumbnail">
            @endif

        </div>
    </div>

    <a href="{{ route('account.edit') }}" class="btn btn-primary mt-3">Edit Account</a>

    <a href="{{ route('logout') }}" class="btn btn-danger mt-3">Logout</a>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Results for "{{ $query }}"</h1>

        <!-- Display search results here -->
        {{-- @foreach($results as $result)
            <div>{{ $result->name }}</div>
        @endforeach --}}
    </div>
@endsection

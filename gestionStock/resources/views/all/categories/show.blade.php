@extends('layout.app')

@section('title', 'Category Details')

@section('content')
    <div class="container">
        <h1>Category Details</h1>
        <p><strong>ID:</strong> {{ $category->id }}</p>
        <p><strong>Name:</strong> {{ $category->name }}</p>
        <p><strong>Description:</strong> {{ $category->description }}</p>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection

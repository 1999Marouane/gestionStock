@extends('layout.app')

@section('title', 'Add Supplier')

@section('content')
    <div class="container">
        <h1>Add Supplier</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="contact_info" class="form-label">Contact Info</label>
                <input type="text" class="form-control" id="contact_info" name="contact_info" value="{{ old('contact_info') }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
            </div>
            <button type="submit" class="btn btn-primary">Create Supplier</button>
        </form>
    </div>
@endsection

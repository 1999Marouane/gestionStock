@extends('layout.app')

@section('title', 'Products')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Add Product</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Supplier</th>
                <th>Cost Price</th>
                <th>Sale Price</th>
                <th>Quantity in Stock</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->supplier->name }}</td>
                    <td>{{ $product->cost_price }}</td>
                    <td>{{ $product->sale_price }}</td>
                    <td>{{ $product->quantity_in_stock }}</td>
                    <td>
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

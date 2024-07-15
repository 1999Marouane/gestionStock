@extends('layout.app')

@section('title', 'Product Details')

@section('content')
    <div class="container">
        <h1>Product Details</h1>
        <p><strong>ID:</strong> {{ $product->id }}</p>
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Category:</strong> {{ $product->category->name }}</p>
        <p><strong>Supplier:</strong> {{ $product->supplier->name }}</p>
        <p><strong>Cost Price:</strong> {{ $product->cost_price }}</p>
        <p><strong>Sale Price:</strong> {{ $product->sale_price }}</p>
        <p><strong>Quantity in Stock:</strong> {{ $product->quantity_in_stock }}</p>
        <a href="{{ route('product.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection

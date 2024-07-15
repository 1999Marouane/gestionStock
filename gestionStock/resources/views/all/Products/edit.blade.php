@extends('layout.app')

@section('title', 'Edit Product')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="supplier_id">Supplier:</label>
                <select class="form-control" id="supplier_id" name="supplier_id" required>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" {{ $product->supplier_id == $supplier->id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cost_price">Cost Price:</label>
                <input type="number" step="0.01" class="form-control" id="cost_price" name="cost_price" value="{{ $product->cost_price }}" required>
            </div>
            <div class="form-group">
                <label for="sale_price">Sale Price:</label>
                <input type="number" step="0.01" class="form-control" id="sale_price" name="sale_price" value="{{ $product->sale_price }}" required>
            </div>
            <div class="form-group">
                <label for="quantity_in_stock">Quantity in Stock:</label>
                <input type="number" class="form-control" id="quantity_in_stock" name="quantity_in_stock" value="{{ $product->quantity_in_stock }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection

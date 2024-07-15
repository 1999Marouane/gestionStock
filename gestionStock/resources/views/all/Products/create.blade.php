@extends('layout.app')

@section('title', 'Add Product')

@section('content')
    <div class="container">
        <h1>Add Product</h1>
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="supplier_id">Supplier:</label>
                <select class="form-control" id="supplier_id" name="supplier_id" required>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cost_price">Cost Price:</label>
                <input type="number" class="form-control" id="cost_price" name="cost_price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="sale_price">Sale Price:</label>
                <input type="number" class="form-control" id="sale_price" name="sale_price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="quantity_in_stock">Quantity in Stock:</label>
                <input type="number" class="form-control" id="quantity_in_stock" name="quantity_in_stock" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

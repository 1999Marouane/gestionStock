@extends('layout.app')

@section('title', 'Product List')

@section('content')
    <h1 class="my-4">Product List</h1>
    <table class="table table-striped">
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

        </tr>
        </thead>
        <tbody>
        @foreach ($Products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->supplier->name }}</td>
                <td>{{ $product->cost_price }}</td>
                <td>{{ $product->sale_price }}</td>
                <td>{{ $product->quantity_in_stock }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

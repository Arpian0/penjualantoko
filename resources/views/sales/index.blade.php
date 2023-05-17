<!-- resources/views/sales/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Sales</h2>
                    <a href="{{ route('sales.create') }}" class="btn btn-primary">Create Sale</a>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sales as $sale)
                            <tr>
                                <td>{{ $sale->product_name }}</td>
                                <td>{{ $sale->quantity }}</td>
                                <td>{{ $sale->price }}</td>
                                <td>
                                    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST">
                                        <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-secondary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<!-- resources/views/sales/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Sale Details</h2>
                    <a href="{{ route('sales.index') }}" class="btn btn-secondary">Back</a>
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Product Name:</th>
                            <td>{{ $sale->product_name }}</td>
                        </tr>
                        <tr>
                            <th>Quantity:</th>
                            <td>{{ $sale->quantity }}</td>
                        </tr>
                        <tr>
                            <th>Price:</th>
                            <td>{{ $sale->price }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

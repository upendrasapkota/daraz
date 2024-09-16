@extends('layouts.master')
@section('title','Order Details with there items')

@section('sectioncontent')
    <h1>Order Details</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Address</th>
            <td>{{ $orderShow->address }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $orderShow->phone }}</td>
        </tr>
    </table>

    <h2>Order Items</h2>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
        <tr>
            <th>Product Title</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orderShow->orderItem as $orderitem)
            <tr>
                <td>{{ $orderitem->product->title }}</td>
                <td>{{ $orderitem->quantity }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

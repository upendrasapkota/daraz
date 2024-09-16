@extends('layouts.master')


@section('title','category page')

@section('content')

    <h2>{{ $category->category_name }}</h2>

    <table border="1">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category->product as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

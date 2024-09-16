@extends('layouts.master')
@section('content')
    @section('title','Product')
    <table border="1">
        <thead>
        <tr>
            <th>Title</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $products)
            <tr>
                <td>{{ $products->title }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

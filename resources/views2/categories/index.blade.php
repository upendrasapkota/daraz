@extends('layouts.master')

@section('title','Category')
@section('content')
    <table border="1">
        <thead>
        <tr>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->category_name }}</td>
                <td><a href="{{ route('category.show', $category->id) }}">View</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

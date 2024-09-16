@extends('layouts.master')

@section('title','Category')
@section('sectioncontent')
    <a href="{{route('category.create')}}">Create new Category</a>
    <table border="1">
        <thead>
        <tr>
            <th>Category Name</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->category_name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}"
                         style="max-width: 100px; height: auto;">
                </td>
                <td><a href="{{ route('category.show', $category->id) }}">View</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

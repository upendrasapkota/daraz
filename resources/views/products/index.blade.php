@extends('layouts.master')

@section('sectioncontent')
    @section('title','Product')
    <form action="{{route('product.index')}}" method="GET">
        <input type="text" name="search" value="{{request('search')}}" placeholder="search"
               style="display: flex;margin-right: auto; align-items: center">
        <button type="submit" style="display: flex;margin-right: auto;">Search</button>

    </form>
    <a href="{{ route('product.create') }}">Create a new product</a>
    <table border="1">
        <thead>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Edit</th>

        </tr>
        </thead>
        <tbody>
        @foreach($product as $products)
            <tr>
                <td>{{ $products->title }}</td>
                <td>
                    <img src="{{ asset('storage/' . $products->image) }}" alt="{{ $products->title }}"
                         style="max-width: 100px; height: auto;">
                </td>

                <td>
                    <form action="{{ route('product.destroy', $products->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('product.edit', $products->id) }}" method="GET">
                        <button type="submit">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$product->links()}}
@endsection

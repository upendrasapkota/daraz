@extends('layouts.master')

@section('title', 'Create Item')

@section('sectioncontent')
    <div class="container mt-5">
        <h2>Create New Item</h2>
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->category_name }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"
                       value="{{old('title')}}">
                @if($errors->has('title'))
                    <p class="text-danger">
                        <strong>{{$errors->first('title')}}</strong>
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                          placeholder="Enter description" required>{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <p class="text-danger">
                        <strong>{{$errors->first('description')}}</strong>
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
                @if($errors->has('image'))
                    <p class="text-danger">
                        <strong>{{$errors->first('image')}}</strong>
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required
                       value="{{old('price')}}">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity"
                       required value="{{old('quantity')}}">
                @if($errors->has('quantity'))
                    <p class="text-danger">
                        <strong>{{$errors->first('quantity')}}</strong>
                    </p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
</head>
<body>

<h1>Update Product</h1>

<form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="product-details">
        <div>
            <label for="title"><strong>Title:</strong></label>
            <input type="text" id="title" name="title" value="{{ $product->title }}" required>
        </div>

        <div>
            <label for="description"><strong>Description:</strong></label>
            <textarea id="description" name="description" required>{{ $product->description }}</textarea>
        </div>

        <div>
            <label for="image"><strong>Image:</strong></label>
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="max-width: 200px;">
            <input type="file" id="image" name="image">
        </div>

        <div>
            <label for="price"><strong>Price:</strong></label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" required>
        </div>

        <div>
            <label for="quantity"><strong>Quantity:</strong></label>
            <input type="number" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
        </div>

        <div>
            <label for="category_id"><strong>Category ID:</strong></label>
            <input type="text" id="category_id" name="category_id" value="{{ $product->category->id }}" required>
        </div>
    </div>
    <button type="submit">Update</button>
</form>

</body>
</html>

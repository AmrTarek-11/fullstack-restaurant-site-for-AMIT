<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu Item</title>
    <link rel="stylesheet" href="{{ asset('css/admin/styleoftheadmineditmenu.css') }}">
</head>
<body>

    <form action="{{ route('admin.menuitem.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')  <!-- Laravel يفهم إن ده Update -->

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $menu->name) }}">

        <label>Description</label>
        <textarea name="description">{{ old('description', $menu->description) }}</textarea>

        <label>Price</label>
        <input type="number" step="0.01" name="price" value="{{ old('price', $menu->price) }}">

        <label>Category</label>
        <input type="text" name="category" value="{{ old('category', $menu->category) }}">

        <label>Available</label>
        <input type="checkbox" name="is_available" value="1" {{ $menu->is_available ? 'checked' : '' }}>

        <!-- Current Image Preview -->
        @if($menu->image_path)
            <label>Current Image:</label>
            <div>
                <img src="{{ asset('storage/' . $menu->image_path) }}" alt="{{ $menu->name }}" style="max-width: 200px; max-height: 200px;">
            </div>
        @endif

        <label>Change Image</label>
        <input type="file" name="image_path" accept="image/*">

        <button type="submit">Update</button>
    </form>

    <div class="back-link">
        <a href="{{ route('admin.menuitem.index') }}">← Back to Menu Items</a>
    </div>
@include('layouts.partials.footer')
</body>
</html>

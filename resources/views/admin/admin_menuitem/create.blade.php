<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Menu Item</title>
    <link rel="stylesheet" href="{{ asset('css/admin/styleoftheadmineditmenu.css') }}">
</head>
<body>

    <div class="container">
        <h1>Create Menu Item</h1>

        <form action="{{ route('admin.menuitem.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="name">Item Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4"></textarea>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category">

            <label for="image_path">Upload Image:</label>
            <input type="file" id="image_path" name="image_path" accept="image/*">

            <button type="submit">Add Item</button>
        </form>

        <div class="back-link">
            <a href="{{ route('admin.menuitem.index') }}">← Back to Menu Items</a>
        </div>
    </div>
@include('layouts.partials.footer')
</body>
</html>

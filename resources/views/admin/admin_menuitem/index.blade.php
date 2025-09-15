<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu Items</title>
    <link rel="stylesheet" href="{{ asset('css/admin/styleoftheadminpanel.css') }}">
</head>
<body>
@include('layouts.partials.header')
    <h1>Menu Items Management</h1>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>description</th>
                <th>image</th>
                <th>category</th>
                <th>is_available</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menuItems as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>${{ $item->price }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    @if($item->image_path)
                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->name }}" style="max-width: 100px; max-height: 100px;">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->is_available ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('admin.menuitem.edit', $item->id) }}">
                        <button type="button">Edit</button>
                    </a>
                </td>
                <td>
                    <form action="{{ route('admin.menuitem.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9">No menu items found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <h1>Add Item to Menu</h1>
    <a href="{{ route('admin.menuitem.create') }}">
        <button type="button">Add Menu Item</button>
    </a>
    @include('layouts.partials.footer')    
</body>
</html>

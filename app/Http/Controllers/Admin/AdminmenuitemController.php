<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class AdminmenuitemController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all();
        return view('admin.admin_menuitem.index', compact('menuItems'));
    }

    public function create()
    {
        return view('admin.admin_menuitem.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'description'  => 'nullable|string',
            'price'        => 'required|numeric|min:0',
            'category'     => 'required|string|max:100',
            'is_available' => 'nullable|boolean',
            'image_path'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('storedimages', 'public');
            $validated['image_path'] = $path;
        }

        MenuItem::create($validated);

        return redirect()->route('admin.menuitem.index')
                         ->with('success', 'Menu item created successfully!');
    }

    public function edit(MenuItem $menu)
    {
        return view('admin.admin_menuitem.edit', compact('menu'));
    }

    public function update(Request $request, MenuItem $menu)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'description'  => 'nullable|string',
            'price'        => 'required|numeric|min:0',
            'category'     => 'required|string|max:100',
            'is_available' => 'required|boolean',
            'image_path'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('storedimages', 'public');
            $validated['image_path'] = $path;
        }

        $menu->update($validated);

        return redirect()->route('admin.menuitem.index')
                         ->with('success', 'Menu item updated successfully!');
    }

    public function destroy(MenuItem $menu)
    {
        // Optionally delete the old image file
        if ($menu->image_path && file_exists(storage_path('app/public/' . $menu->image_path))) {
            unlink(storage_path('app/public/' . $menu->image_path));
        }

        $menu->delete();

        return redirect()->route('admin.menuitem.index')
                         ->with('success', 'Menu item deleted successfully!');
    }
}

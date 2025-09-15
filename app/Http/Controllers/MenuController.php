<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Show all menu items.
     */
     public function index(Request $request)
    {
        $category = $request->input('category', 'all'); 
        if ($category !== 'all') {
            $menuItems = MenuItem::where('category', $category)
                                 ->where('is_available', true)
                                 ->get();
        } else {
            $menuItems = MenuItem::where('is_available', true)->get();
        }

        return view('menu.allmenu', compact('menuItems', 'category'));
    }
}

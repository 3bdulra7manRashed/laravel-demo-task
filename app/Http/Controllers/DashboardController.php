<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Item::activeLatest()->get();
        return view('dashboard.index', compact('items'));
    }
    
    public function create()
    {
        return view('dashboard.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'status' => 'required|boolean'
        ]);
        
        Item::create($validated);
        
        return redirect()->route('dashboard')->with('success', 'Item created successfully!');
    }
    
    public function edit(Item $item)
    {
        return view('dashboard.edit', compact('item'));
    }
    
    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'status' => 'required|boolean'
        ]);
        
        $item->update($validated);
        
        return redirect()->route('dashboard')->with('success', 'Item updated successfully!');
    }
    
    public function destroy(Item $item)
    {
        $item->delete();
        
        return redirect()->route('dashboard')->with('success', 'Item deleted successfully!');
    }
}

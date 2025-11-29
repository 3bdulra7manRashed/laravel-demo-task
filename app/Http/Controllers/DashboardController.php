<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Item::activeLatest()->get();
        return view('dashboard', compact('items'));
    }
}

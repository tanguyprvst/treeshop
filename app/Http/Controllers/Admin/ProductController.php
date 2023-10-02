<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display products.
     */
    public function index(): View
    {
        return view('admin.products.index', [
            'products' => Product::paginate(9),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Display products.
     */
    public function update(): RedirectResponse
    {
        return redirect()->route('admin.products.index');
    }

    /**
     * Display products.
     */
    public function show(): View
    {
        return view('product.show', [
            'products' => Product::all(),
        ]);
    }
}

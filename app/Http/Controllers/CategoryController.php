<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $category = Category::create([
            'category_name' => $request->input('category_name')
        ]);

        return response()->json($category, 201);
    }

    public function read()
    {
        $categories = Category::all();
        return response()->json($categories, 200);
    }
}

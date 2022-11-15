<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Validation\Rule;

class AdminCategoryController extends Controller
{

 public function create()
    {
        return view('admin.category.category');
    }
    public function store(Category $category)
    {
         $attributes = request()->validate([
            'name' => 'required|min:3|max:255|unique:categories,name',
            'slug' => 'required|max:255|unique:categories,slug',

        ]);

        Category::create($attributes);

        return back();
    }
}

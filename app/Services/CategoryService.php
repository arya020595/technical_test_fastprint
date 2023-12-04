<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getCategories()
    {
        return Category::all();
    }

    public function getCategory($id)
    {
    }

    public function storeCategory($request)
    {
    }

    public function updateCategory($request, $id)
    {
    }

    public function deleteCategory($id)
    {
    }
}

<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getProducts()
    {
        return Product::with('category', 'status')
            ->select('products.*')  // Specify other columns as needed
            ->join('statuses', 'products.status_id', '=', 'statuses.id')
            ->where('statuses.name', 'bisa dijual')
            ->orderBy('products.created_at', 'desc')
            ->paginate(10);
    }

    public function getProduct($id)
    {
        return Product::findOrFail($id);
    }

    public function storeProduct($request)
    {
        return Product::create($request);
    }

    public function updateProduct($request, $id)
    {
        $product = Product::findOrFail($id);

        return $product->update($request);
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        return $product->delete();
    }
}

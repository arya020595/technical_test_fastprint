<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Services\ProductService;
use App\Services\CategoryService;
use App\Services\StatusService;
use App\Http\Requests\StoreProductRequest;


class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;
    protected $statusService;

    public function __construct(ProductService $productService, CategoryService $categoryService, StatusService $statusService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
        $this->statusService = $statusService;
    }

    public function index(): View
    {
        $products = $this->productService->getProducts();

        return view('products.index', compact('products'));
    }

    public function show(string $id): View
    {
        $product = $this->productService->getProduct($id);

        return view('products.show', compact('product'));
    }

    public function create(): View
    {
        $categories = $this->categoryService->getCategories();
        $statuses = $this->statusService->getStatuses();

        return view('products.create', compact('categories', 'statuses'));
    }

    public function store(StoreProductRequest $request, ProductService $productService): RedirectResponse
    {
        $validated = $request->validated();

        $productService->storeProduct($validated);

        return redirect()->route('products.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit(string $id): View
    {
        $product = $this->productService->getProduct($id);
        $categories = $this->categoryService->getCategories();
        $statuses = $this->statusService->getStatuses();

        return view('products.edit', compact('product', 'categories', 'statuses'));
    }

    public function update(StoreProductRequest $request, $id): RedirectResponse
    {
        $validated = $request->validated();

        $this->productService->updateProduct($validated, $id);

        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $this->productService->deleteProduct($id);

        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

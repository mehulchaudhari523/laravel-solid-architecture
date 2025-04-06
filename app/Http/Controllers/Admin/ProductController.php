<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Services\Admin\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }

    public function index() {
        return response()->json($this->productService->getAll());
    }

    public function store(ProductStoreRequest $request) {
        return response()->json($this->productService->store($request->validated()));
    }

    public function update(ProductUpdateRequest $request, $id) {
        return response()->json($this->productService->update($id, $request->validated()));
    }

    public function destroy($id) {
        return response()->json($this->productService->delete($id));
    }
}

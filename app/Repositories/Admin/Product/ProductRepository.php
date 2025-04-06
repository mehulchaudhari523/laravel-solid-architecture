<?php

namespace App\Repositories\Admin\Product;

use App\Models\Product;

class ProductRepository implements ProductInterface
{
    public function getAll() {
        return Product::all();
    }

    public function store(array $data) {
        return Product::create($data);
    }

    public function update($id, array $data) {
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function delete($id) {
        $product = Product::findOrFail($id);
        return $product->delete();
    }
}

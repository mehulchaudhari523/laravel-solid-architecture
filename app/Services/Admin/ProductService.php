<?php

namespace App\Services\Admin;

use App\Repositories\Admin\Product\ProductInterface;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductInterface $productRepo) {
        $this->productRepo = $productRepo;
    }

    public function getAll() {
        return $this->productRepo->getAll();
    }

    public function store(array $data) {
        return $this->productRepo->store($data);
    }

    public function update($id, array $data) {
        return $this->productRepo->update($id, $data);
    }

    public function delete($id) {
        return $this->productRepo->delete($id);
    }
}

<?php

namespace App\Repositories\Admin\Product;

interface ProductInterface
{
    public function getAll();
    public function store(array $data);
    public function update($id, array $data);
    public function delete($id);
}

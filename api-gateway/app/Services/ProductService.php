<?php

namespace App\Services;

use App\Traits\RequestService;

class ProductService
{
    use RequestService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.products.base_uri');
        $this->secret = config('services.products.secret');
    }


    public function fetchProducts()
    {
        return $this->request('GET', '/api/products');
    }

    public function fetchProduct($product)
    {
        return $this->request('GET', "/api/products/{$product}");
    }

    public function createProduct($data)
    {
        return $this->request('POST', '/api/products', $data);
    }

    public function updateProduct($product, $data)
    {
        return $this->request('PATCH', "/api/products/{$product}", $data);
    }

    public function deleteProduct($product)
    {
        return $this->request('DELETE', "/api/products/{$product}");
    }
}

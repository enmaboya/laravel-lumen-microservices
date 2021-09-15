<?php

namespace App\Services;

use App\Traits\RequestService;

class OrderService
{
    use RequestService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.orders.base_uri');
        $this->secret = config('services.orders.secret');
    }

    public function fetchOrders()
    {
        return $this->request('GET', '/api/orders');
    }

    public function fetchOrder($order)
    {
        return $this->request('GET', "/api/orders/{$order}");
    }

    public function createOrder($data)
    {
        return $this->request('POST', '/api/orders', $data);
    }

    public function updateOrder($order, $data)
    {
        return $this->request('PATCH', "/api/orders/{$order}", $data);
    }

    public function deleteOrder($order)
    {
        return $this->request('DELETE', "/api/orders/{$order}");
    }
}

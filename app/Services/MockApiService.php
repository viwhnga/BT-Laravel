<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MockApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('MOCK_API_URL');
    }

    public function getAllProducts()
    {
        return Http::get($this->baseUrl)->json();
    }

    public function getProductById($id)
    {
        return Http::get("{$this->baseUrl}/{$id}")->json();
    }

    public function createProduct($data)
    {
        return Http::post($this->baseUrl, $data)->json();
    }

    public function updateProduct($id, $data)
    {
        return Http::put("{$this->baseUrl}/{$id}", $data)->json();
    }

    public function deleteProduct($id)
    {
        return Http::delete("{$this->baseUrl}/{$id}")->json();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MockApiService;

class ProductController extends Controller
{
    protected $mockApiService;

    public function __construct(MockApiService $mockApiService)
    {
        $this->mockApiService = $mockApiService;
    }

    public function getProducts()
    {
        $products = $this->mockApiService->getAllProducts();
        return response()->json($products);
    }

    public function index(MockApiService $mockApiService)
{
    $products = $mockApiService->getAllProducts();
    return response()->json($products, 200, [], JSON_PRETTY_PRINT);
}
}

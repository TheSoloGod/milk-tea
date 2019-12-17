<?php

namespace App\Http\Controllers;

use App\Services\ProductService\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function getProductsBySort(Request $request)
    {
        $products = $this->productService->getProductsByOrder($request);
        return $products;
    }

    public function getProductsByFilter(Request $request)
    {
        $products = $this->productService->getProductsByFilter($request);
        return $products;
    }
}

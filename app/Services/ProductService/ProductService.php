<?php


namespace App\Services\ProductService;


use App\Repositories\ProductRepository\ProductRepositoryInterface;
use App\Repositories\ToppingRepository\ToppingRepositoryInterface;

class ProductService implements ProductServiceInterface
{
    protected $productRepository;
    protected $toppingRepository;

    public function __construct(ProductRepositoryInterface $productRepository,
                                ToppingRepositoryInterface $toppingRepository)
    {
        $this->productRepository = $productRepository;
        $this->toppingRepository = $toppingRepository;
    }

    public function getProductsByOrder($request)
    {
        $number = 3;
        $selectedSort = $this->selectedSort($request);

        $products = $this->productRepository->getProductSort($selectedSort[0], $selectedSort[1], $number);
        return $this->getToppings($products);
    }

    public function getProductsByFilter($request)
    {
        $number = 3;
        $toppings = $request->toppings;
        $selectedSort = $this->selectedSort($request);

        $products = $this->productRepository->getProductsByFilter($toppings, $selectedSort[0], $selectedSort[1], $number);
        return $this->getToppings($products);
    }

    public function getToppings($products)
    {
        foreach ($products as $product) {
            $toppings = $this->toppingRepository->getToppingByProductId($product->id);
            $product->toppings = (Object)[];
            foreach ($toppings as $index => $topping) {
                $product->toppings->$index = $topping->name;
            }
        }
        return $products;
    }

    public function selectedSort($request)
    {
        $selected = $request->selected;
        $selectedSort = explode('-', $selected);
        return $selectedSort;
    }
}

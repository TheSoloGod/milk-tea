<?php


namespace App\Repositories\ProductRepository;


use App\Product;
use App\Repositories\Eloquent\EloquentRepository;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }

    public function getProductSort($sortBy, $sortDirection ,$number)
    {
        $products = $this->model->orderBy($sortBy, $sortDirection)
                                ->limit($number)
                                ->get();
        return $products;
    }

    public function getProductsByFilter($toppings, $sortBy, $sortDirection, $number)
    {
        $products = $this->model->whereIn('id', function ($query) use ($toppings) {
            $query->select('product_id')
//                  ->where(function ($query) use ($toppings) {
//                      foreach ($toppings as $topping) {
//                          $query->where('topping_id', $topping);
//                      }
//                  })
                    ->where('topping_id', $toppings)
                  ->from('product_topping');
        })->orderBy($sortBy, $sortDirection)
          ->limit($number)
          ->get();
        return $products;
    }
}

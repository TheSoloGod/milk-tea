<?php


namespace App\Repositories\ToppingRepository;


use App\Repositories\Eloquent\EloquentRepository;
use App\Topping;

class ToppingRepository extends EloquentRepository implements ToppingRepositoryInterface
{
    public function getModel()
    {
        return Topping::class;
    }

    public function getToppingByProductId($productId)
    {
        $toppings = $this->model->whereIn('id', function ($query) use ($productId) {
            $query->select('topping_id')
                ->where('product_id', $productId)
                ->from('product_topping');
        })->get();
        return $toppings;
    }
}

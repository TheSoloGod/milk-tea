<?php


namespace App\Repositories\StoreRepository;


use App\Repositories\Eloquent\EloquentRepository;
use App\Store;

class StoreRepository extends EloquentRepository implements StoreRepositoryInterface
{
    public function getModel()
    {
        return Store::class;
    }
}

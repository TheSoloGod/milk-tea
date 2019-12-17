<?php


namespace App\Services\ToppingService;


use App\Repositories\ToppingRepository\ToppingRepositoryInterface;

class ToppingService implements ToppingServiceInterface
{
    protected $toppingRepository;

    public function __construct(ToppingRepositoryInterface $toppingRepository)
    {
        $this->toppingRepository = $toppingRepository;
    }

    public function getAll()
    {
        $toppings = $this->toppingRepository->getAll();
        return $toppings;
    }
}

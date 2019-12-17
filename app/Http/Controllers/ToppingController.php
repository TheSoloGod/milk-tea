<?php

namespace App\Http\Controllers;

use App\Services\ToppingService\ToppingServiceInterface;
use Illuminate\Http\Request;

class ToppingController extends Controller
{
    protected $toppingService;

    public function __construct(ToppingServiceInterface $toppingService)
    {
        $this->toppingService = $toppingService;
    }

    public function getAllToppings()
    {
        $toppings = $this->toppingService->getAll();
        return $toppings;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
class prodackcontroller extends Controller
{
    public function index(): Response
    {
        $products = [
            [
                'id' => 1,
                'sku' => '#AB12312',
                'name' => 'Product A',
                'price' => 15000
            ],
            [
                'id' => 2,
                'sku' => '#CD12312',
                'name' => 'Product B',
                'price' => 20000
            ]
        ];
        return response(view('products.index', ['products' => $products]));
    }
}



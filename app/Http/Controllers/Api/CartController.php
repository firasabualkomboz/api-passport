<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)

    {

        $request->validate([

            'product_id'

        ]);

        $cart = $this->cart->add($request->post('product_id'));
        

    }
}

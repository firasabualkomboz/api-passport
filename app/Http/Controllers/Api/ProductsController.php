<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $product = Product::all();
        return $product;
    }

    public function store(ProductRequest $request)

    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return response()->json([
            'data'    => $product,
            'success' => true ,
            'message' => 'successfully added product '

        ] , 201);
    } // END STORE

    public function show($id)
    {

    }

    public function update(Request $request, Product $product)

    {

        $request->validate([
            'name' => 'sometimes|required',
            'price' => 'sometimes',
        ]);


        $product = Product::findOrFail($product);


        $product->update($request->all());

            return response([
                'product' =>  $product,
                'message' => 'Update successfully'
            ], 200);

    }


    public function destroy($id)
    {
        Product::destroy($id);
        return response::json([
            'message' => "Product $id deleted",
        ] );
    }
}

<?php

namespace App\Services\Impl;

use App\Models\Product;

use App\Services\ProductService;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;


class ProductServiceImpl implements ProductService
{
    public function getAll()
    {
        $products = Product::all();

        if($products==null){
            throw new \Exception('Нет данных',404);
        }

        return $products;
    }


    public function delete(Product $product)
    {

        $product->delete();

        return $product;
    }



    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->get('title');;
        $product->quantity =$request->get('quantity');;
        $product->price = $request->get('price');;
        $product->category_id =$request->get('category_id');;
        $product->image = $request->get('image');;

        $product->save();
        return $product;
    }

    public function edit(Product $product, Request $request)
    {
        $product->title = $request->get('title');;
        $product->quantity =$request->get('quantity');;
        $product->price = $request->get('price');;
        $product->category_id =$request->get('category_id');;
        $product->image = $request->get('image');;

        $product->save();
        return $product;
    }
}

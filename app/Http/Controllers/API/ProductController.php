<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
       $this->productService = $productService;
    }


    public function  index(){
        try {
            $products=$this->productService->getAll();

            return response()->json([
                'status'=> true,
                'products' => ProductResource::collection($products)
            ]);
        }catch (\Exception $e){
            return response()->json([
               'status'=>false,
               'message'=>$e->getMessage()
            ],$e->getCode());
        }
    }

    public function del(Product $product){
        try {
            $products=$this->productService->delete($product);
            return response()->json([
                'status'=> true,
                'products'=>$products
            ]);
        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
                'message'=>$e->getMessage()
            ],$e->getCode());
        }
    }



    public function store(Request $request){
        try {
            $products=$this->productService->store($request);
            return response()->json([
                'status'=> true,
                'products'=>$products
            ]);
        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
                'message'=>$e->getMessage()
            ],$e->getCode());
        }
    }

    public function edit(Product  $product,Request $request){
        try {
            $products=$this->productService->edit($product,$request);
            return response()->json([
                'status'=> true,
                'products'=>$products
            ]);
        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
                'message'=>$e->getMessage()
            ],$e->getCode());
        }
    }
}

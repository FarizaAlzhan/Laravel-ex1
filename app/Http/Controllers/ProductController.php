<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->get();
        return view('products',[
            'products' => $products
        ]);
    }

    public  function create(){
        $categories = Category::all();
        return view('create-products',[
            'categories' => $categories
            ]);
    }
    public  function store(Request $request){
        if($request->hasFile('image')){
            $product = new Product();
            $product->title = $request->get('title');
            $product->quantity = $request->get('quantity');
            $product->price = $request->get('price');
            $product->category_id = $request->get('category_id');
            $url = $request->file('image')->store('images');
            $product->image = $url;

            $product->save();

            return redirect('/')->with('status','Новый товар успешно сохранен');
        }
    }
    public function product (Product $product){
        return view('product',[
            'product' => $product
        ]);
    }

    public function edit(Product $product){
        $categories = Category::all();

        return view('edit-product',[
            'product' => $product,
            'categories'=>$categories
        ]);

    }

    public  function editSave(Product  $product,Request $request ){
        if($request->hasFile('image')){
            $product->title = $request->get('title');
            $product->quantity = $request->get('quantity');
            $product->price = $request->get('price');
            $product->category_id = $request->get('category_id');
            $url = $request->file('image')->store('images');
            $product->image = $url;

            $product->save();

            return redirect('/')->with('status',' товар успешно сохранен');
        }
    }

    public function delete(Product $product)
    {

        $product->delete();

        return redirect('/')->with('status', 'Товар успешно удален.');
    }
}

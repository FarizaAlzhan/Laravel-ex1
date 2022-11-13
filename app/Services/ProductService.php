<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

interface ProductService
{
    public function getAll();

    public function delete(Product $product);

    public  function store(Request $request);

    public  function edit(Product $product,Request $request);


}

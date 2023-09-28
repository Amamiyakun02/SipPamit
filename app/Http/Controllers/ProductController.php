<?php

namespace App\Http\Controllers;
use App\Models\products;

use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function index($product = null)
    {
        return view('shop_product', ['product' => $product]);
    }


        public function edit($id)
    {
        $product = products::find($id);
        return $this->index($product);
    }
        public function showProduct2()
    {
        $product = Products::find(1); // Mengambil produk dengan ID 3
        return view('shop_product', ['product' => $product]);
    }


}

<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product1() {
        return view('welcome');

    }

    public function product2() {

        $products = product::orderBy('id', 'asc')->get();

        return view('product')->with('products', $products);

    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function getProducts(){
    	$products = Product::all();


    	return view('shop.index', ['products' => $products]);
    }
}

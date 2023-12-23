<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('modules.products.productslist');
    }
    public function productDetails()
    {
        return view('modules.products.productsDetails');
    }
}

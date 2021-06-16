<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "title";
        return view('products.index', compact('title'));
    }

    public function about()
    {
        return 'about page';
    }
}

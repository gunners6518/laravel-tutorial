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

	public function show($name)
	{
		$data = [
			'iphone' => 'iPhone', //nameからiphoneを受け取ったらiPhoneで返す
			'samsung' => 'Samsung'
		];


		return view('products.index', [
			'products' => $data[$name] ?? 'Products' . $name . 'nothing！'
		]);
	}
}

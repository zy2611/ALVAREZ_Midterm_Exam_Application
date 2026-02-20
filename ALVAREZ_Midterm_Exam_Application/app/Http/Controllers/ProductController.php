<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                "name" => "Laptop",
                "price" => 50000,
                "brand" => "Dell"
            ],
            [
                "name" => "Phone",
                "price" => 25000,
                "brand" => "Samsung"
            ],
            [
                "name" => "Headphones",
                "price" => 3000,
                "brand" => "Sony"
            ]
        ];

        return view('products', compact('products'));
    }
}
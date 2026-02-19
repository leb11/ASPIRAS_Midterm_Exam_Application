<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            'Gurren Lagann',
            'Monster by Naoki Urasawa',
            'Pluto by Naoki Urasawa',
            'Bleach',
            'Detective Conan'
        ];

        return view('products', compact('products'));
    }
}
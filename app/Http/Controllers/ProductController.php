<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = [
            [
                'name' => 'Gurren Lagann', 
                'image' => 'https://i.pinimg.com/236x/96/d9/37/96d9376bbdaacc0aa4b1919cb57bf825.jpg'
            ],
            [
                'name' => 'Monster by Naoki Urasawa', 
                'image' => 'https://static.wikia.nocookie.net/obluda/images/c/c2/Monster-anime-poster.jpg'
            ],
            [
                'name' => 'Pluto by Naoki Urasawa', 
                'image' => 'https://cdn.myanimelist.net/r/360x360/images/anime/1021/138568.jpg'
            ],
            [
                'name' => 'Bleach', 
                'image' => 'https://www.animesenpai.net/wp-content/uploads/2022/08/20220806_200737_compress59-725x1024.jpg.webp'
            ],
            [
                'name' => 'Detective Conan', 
                'image' => 'https://i.pinimg.com/736x/25/7a/f7/257af71b2c180880353dafcb85b6d325.jpg'
            ]
        ];

        return view('products', compact('products'));
    }
}
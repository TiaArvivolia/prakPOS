<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($category)
    {
        $products = [
            'food-beverage' => ['Bolu Kukus Malang ', 'Jus Mangga', 'Bumbu Kari'],
            'beauty-health' => ['Serum Wajah', 'Multivitamin', 'Lotion Tubuh'],
            'home-care' => ['Pembersih Serbaguna', 'Pewangi Ruangan', 'Deterjen Ramah Lingkungan'],
            'baby-kid' => ['Selimut Bayi', 'Sepatu Anak', 'Mainan Edukasi'],
        ];


        return view('products', [
            'category' => $category,
            'products' => $products[$category] ?? []
        ]);
    }
}
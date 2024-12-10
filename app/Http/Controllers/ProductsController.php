<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'id' => 1,
                'name' => 'Пельмени',
                'price' => '2800тг / 1кг',
                'image' => '/images/products/pelmeni.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Манты',
                'price' => '2900тг / 1кг',
                'image' => '/images/products/manty.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Вареники',
                'price' => '1500тг / 1кг',
                'image' => '/images/products/vareniki.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Орама',
                'price' => '1900тг / 1кг (тыква, картошка)',
                'image' => '/images/products/orama.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Бореки',
                'price' => '1600тг / 1кг',
                'image' => '/images/products/boreki.jpg',
            ],
            [
                'id' => 6,
                'name' => 'Тушпара',
                'price' => '1600тг / 1кг',
                'image' => '/images/products/tushpara.jpg',
            ],
            [
                'id' => 7,
                'name' => 'Самса',
                'price' => '2300тг / 1кг',
                'image' => '/images/products/samsa.webp',
            ],
            [
                'id' => 10,
                'name' => 'Чебуреки',
                'price' => '2800тг / 1кг',
                'image' => '/images/products/chebureki.jpg',
            ],
            [
                'id' => 8,
                'name' => 'Жайма',
                'price' => '1000тг / 500гр',
                'image' => '/images/products/jaima.webp',
            ],
            [
                'id' => 9,
                'name' => 'Тесто для самсы',
                'price' => '1600тг / 1кг',
                'image' => '/images/products/samsa_testo.jpg',
            ],
        ]);

        return view('pages.products.index', compact('products'));
    }
}

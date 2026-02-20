<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        'movies' => [
            [
                'title'       => 'Inception',
                'category'    => 'Sci-Fi',
                'price'       => 12.99,
                'description' => 'A thief who steals corporate secrets through dream-sharing technology.'
            ],
            [
                'title'       => 'The Dark Knight',
                'category'    => 'Action',
                'price'       => 10.99,
                'description' => 'Batman faces the Joker in Gotham City.'
            ],
            [
                'title'       => 'Interstellar',
                'category'    => 'Sci-Fi',
                'price'       => 14.99,
                'description' => 'A team of explorers travel through a wormhole in space.'
            ],
        ],
    ];

    public function showByTheme(string $theme = 'movies')
    {
        if (!array_key_exists($theme, $this->products)) {
            $theme = 'movies';
        }

        $products = $this->products[$theme];

        return view('products', [
            'theme'    => $theme,
            'products' => $products,
        ]);
    }
}
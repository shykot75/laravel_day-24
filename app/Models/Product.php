<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct(){
        return[
            0=> [
                'id' => '1',
                'name' => 'T-shirt',
                'price'=> '850',
                'description' => 'Some content goes here about this product..',
                'image' => asset('/img/T-Shirt.jpg')
            ],
            1=> [
                'id' => '2',
                'name' => 'Hoodie',
                'price'=> '2850',
                'description' => 'Some content goes here about this product..',
                'image' => asset('/img/Hoodie.jpg')
            ],
            2=> [
                'id' => '3',
                'name' => 'HeadPhone',
                'price'=> '1850',
                'description' => 'Some content goes here about this product..',
                'image' => asset('/img/headphone.jfif')
            ]
        ];
    }
}

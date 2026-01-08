<?php

namespace App\Services;

class ProductService
{

    public static function products()
    {
        return [
            [
                "id" => 1,
                "name" => "Terracotta Vase",
                "slug" => "terracotta-vase",
                "price" => 850,
                "category" => "Pottery",
                "stock" => true,
                "image" => "https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg"
            ],
            [
                "id" => 2,
                "name" => "Hand-painted Coasters",
                "slug" => "hand-painted-coasters",
                "price" => 1200,
                "category" => "Home Decor",
                "stock" => true,
                "image" => "https://images.pexels.com/photos/3186654/pexels-photo-3186654.jpeg"
            ],
            [
                "id" => 3,
                "name" => "Embroidered Tote Bag",
                "slug" => "embroidered-tote-bag",
                "price" => 1500,
                "category" => "Accessories",
                "stock" => true,
                "image" => "https://images.pexels.com/photos/1561020/pexels-photo-1561020.jpeg"
            ],
            [
                "id" => 4,
                "name" => "Brass Oil Lamp",
                "slug" => "brass-oil-lamp",
                "price" => 2200,
                "category" => "Home Decor",
                "stock" => true,
                "image" => "https://images.pexels.com/photos/2082090/pexels-photo-2082090.jpeg"
            ],
        ];
    }
}

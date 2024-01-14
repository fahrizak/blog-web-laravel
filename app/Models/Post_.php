<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul post Pertama",
            "slug" => "Judul-post-Pertama",
            "author" => "Fahriza Kurniawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident illum perferendis pariatur quibusdam autem molestias delectus eveniet error. Repellendus voluptates porro, odit a, ipsam aliquid voluptatibus nesciunt quod fuga nobis inventore necessitatibus ipsa molestiae quam est ducimus adipisci libero blanditiis repudiandae laudantium sunt quia eum non commodi. Quasi soluta adipisci quisquam illo deleniti animi officiis, eos quas ad architecto. Architecto odit magni placeat iure voluptatem maxime nesciunt natus qui unde temporibus dolores, sint, ab fuga. Obcaecati atque magni temporibus?"
        ],
        [
            "title" => "Judul post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Fahriza Kurniawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident illum perferendis pariatur quibusdam autem molestias delectus eveniet error. Repellendus voluptates porro, odit a, ipsam aliquid voluptatibus nesciunt quod fuga nobis inventore necessitatibus ipsa molestiae quam est ducimus adipisci libero blanditiis repudiandae laudantium sunt quia eum non commodi. Quasi soluta adipisci quisquam illo deleniti animi officiis, eos quas ad architecto. Architecto odit magni placeat iure voluptatem maxime nesciunt natus qui unde temporibus dolores, sint, ab fuga. Obcaecati atque magni temporibus?"
        ]
    ];  
    
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {   
        $posts =  static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

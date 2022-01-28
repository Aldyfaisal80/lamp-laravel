<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Aldy",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam eius ut quaerat ea nulla tenetur voluptatem voluptatum, maxime quas aliquid nihil sit minus corporis? Nulla quia asperiores laboriosam tenetur molestias, corrupti delectus nostrum nisi, itaque sunt, totam ex eum sit reprehenderit rem? Cupiditate atque optio facilis a excepturi tempora tempore voluptatibus veniam sed nemo voluptates nostrum nam sequi eligendi, incidunt quae adipisci sunt aliquam at fugit asperiores consequuntur explicabo dolor? Iure eaque quas vitae nobis assumenda temporibus voluptate non aliquam."
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Erwan",
                "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis soluta laborum optio modi. Quo beatae voluptates voluptatum asperiores corrupti placeat magni, id inventore veritatis, molestiae dolorum voluptatibus. Delectus doloremque vero ea esse nobis numquam, quia soluta assumenda quis consectetur quasi quae consequuntur recusandae alias nemo aperiam. Iste facere sunt explicabo quisquam tempora! Mollitia a atque neque quae eligendi, est explicabo, minima possimus rem molestiae nobis, tenetur in perspiciatis quas voluptates vitae tempora et alias voluptatum. Eius, fuga quo accusantium voluptatum libero vitae? Optio voluptate iure eius doloremque, alias nesciunt inventore eos adipisci a, sit consequatur quo molestiae nisi temporibus unde."
            ]
        ];

    public static function all ()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
     
}
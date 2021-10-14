<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "ichan cn",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptates odio quia laudantium doloremque porro soluta quaerat deleniti dolore obcaecati at excepturi sequi ut, recusandae sunt nam nihil nemo doloribus. Excepturi, laboriosam est itaque quibusdam ipsam distinctio rerum eaque laborum unde veniam consequuntur, commodi perspiciatis molestiae, placeat qui esse quisquam. Odit distinctio, cupiditate atque architecto, amet sunt non id vitae praesentium eos, natus ullam perspiciatis tempora. Facere, cumque, expedita corrupti laboriosam, sequi ipsa vitae nam odio autem dolorum numquam natus."

        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "irsyad",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis magni neque molestias facilis aliquid laudantium eos laboriosam non, sed et doloribus doloremque officiis officia asperiores voluptas quam temporibus nihil autem iure? Est quae, vero voluptatibus libero accusamus quis ea excepturi? Corrupti tempore magnam nulla et perspiciatis enim beatae repudiandae sit rem quis. Eum in sunt enim praesentium quae laborum voluptas unde commodi voluptatem rerum rem ut illo soluta sit adipisci, numquam temporibus deleniti quisquam maxime maiores! Dolorem, eos! Sed, voluptas voluptates in illum aperiam facere fuga. Officia unde maxime voluptate repudiandae, earum ea distinctio iste sunt, debitis exercitationem ducimus ad."

        ],
    ];

    public static function all() 
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}


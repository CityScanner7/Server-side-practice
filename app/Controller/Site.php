<?php

namespace Controller;

use Model\Post;
use Src\View;

class Site
{
    public function go(): string
    {
        $posts = Post::all();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function method () {
        $posts = [
            'First title',
            'Second title',
            'Third title',
            'Fourd title',
        ];

        return view('blog', compact('posts'));
    }
}

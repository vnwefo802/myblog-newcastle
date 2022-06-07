<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Footer;

class HomeController extends Controller
{
    public function index()
    {



        $post = Post::find(1);
        $category = Category::find(1);


        // $category = Category::orderBy('id', 'DESC');
        $recentPosts = Post::latest()->take(3)->get();
        return view('home', compact('recentPosts'));

    }
}

<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $post = Post::findOrFail(1);
        $tag = Tag::findOrFail(1);
        $Categories = Category::findOrFail(1);
        return view('admin_dashboard.index',compact('post', 'tag', 'Categories'));
    }
}

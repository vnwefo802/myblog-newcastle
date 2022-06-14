<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;


use App\Models\Tag;

class AdminTagsController extends Controller
{
    public function index()
    {
        return view('admin_dashboard.tags.index', [
            'tags' => Tag::with('posts')->paginate(50),
        ]);
    }


    public function show(Tag $tag)
    {
        return view('admin_dashboard.tags.show', [
            'tag' => $tag
        ]);
    }

    public function destroy(Tag $tag)
    {
        $tag->posts()->detach();
        $tag->delete();
        Alert::success('success', 'Tag has been Deleted.');

        return redirect()->route('admin.tags.index');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $blogId)
{
    $request->validate([
        'content' => 'required|string',
    ]);

    Comment::create([
        'blog_id' => $blogId,
        'content' => $request->content,
    ]);

    return redirect()->back();
}
}

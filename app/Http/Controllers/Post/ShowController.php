<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category->id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);

        return view('post.show', compact('post', 'date', 'relatedPosts'));
    }
}
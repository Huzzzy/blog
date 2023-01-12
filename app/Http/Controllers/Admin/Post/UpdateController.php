<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\Post\Service;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $data['preview_image'] = Storage::put('public/images', $data['preview_image']);
        $data['main_image'] = Storage::put('public/images', $data['main_image']);

        $post->update($data);
        $post->tags()->sync($tagIds);

        return view('admin.post.show', compact('post'));
    }
}
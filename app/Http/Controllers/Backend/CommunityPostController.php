<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Community;
use App\Models\Post;
use Inertia\Inertia;

class CommunityPostController extends Controller
{
    public function store(StorePostRequest $request, Community $community)
    {
        $community->posts()->create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
        ]);
        return to_route('frontend.communities.show', $community->slug);


    }

    public function create(Community $community): \Inertia\Response
    {
        return Inertia::render('Communities/Posts/Create', compact('community'));
    }

    public function edit(Community $community, Post $post)
    {
        return Inertia::render('Communities/Posts/Edit', compact('community', 'post'));
    }

    public function update(StorePostRequest $request, Community $community, Post $post)
    {
        $post->update($request->validated());
        return to_route('frontend.communities.posts.show', [$community->slug, $post->slug]);
    }

    public function destroy(Community $community, Post $post)
    {
        $post->delete();
        return to_route('frontend.communities.show', [$community->slug]);
    }
}

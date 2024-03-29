<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommunityPostResource;
use App\Models\Community;
use Inertia\Inertia;

class CommunityController extends Controller
{
    public function show($slug): \Inertia\Response
    {
        $community = Community::where('slug', $slug)->first();
        $posts = CommunityPostResource::collection($community->posts()->with('user')->paginate(3));

        return Inertia::render('Frontend/Communities/Show', compact('community', 'posts'));
    }
}

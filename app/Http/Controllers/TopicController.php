<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTopicRequest;
use App\Topic;
use App\Post;
use App\Transformers\TopicTransformer;

class TopicController extends Controller
{
    public function store(StoreTopicRequest $request)
    {
    	$topic = new Topic;
    	$topic->title = $request->title;
    	$topic->user()->associate($request->user());

    	$post = new Post;
    	$post->body = $request->body;
    	$post->user()->associate($request->user());

    	$topic->save();
    	$topic->posts()->save($post);

        return fractal()
            ->item($topic)
            ->parseIncludes(['user', 'posts', 'posts.user'])
            ->transformWith(new TopicTransformer)
            ->toArray();
    }
}

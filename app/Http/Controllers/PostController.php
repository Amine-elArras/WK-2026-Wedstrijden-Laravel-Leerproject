<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Geeft alle posts terug.
     */
    public function index()
    {
        return                                              Post::all();
    }

    /**
     * Maakt een nieuwe post aan.
     */
    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    /**                                                                                                      
     * Geeft één specifieke post terug.
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Werkt een bestaande post bij.
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return $post;
    }

    /**
     * Verwijdert een post.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->noContent();
    }
}
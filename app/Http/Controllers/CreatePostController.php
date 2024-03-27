<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CreatePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ["required", "min:3", "max:100"],
            'subtitle' => ["required", "min:3", "max:100"],
            'subject' => ["required", "min:3", "max:100"],
            'publication_date' => ["nullable", "date"]
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->subject = $request->subject;
        $post->publication_date = $request->publication_date;
        $post->save();

        return Redirect::back()->with("status", "Post created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

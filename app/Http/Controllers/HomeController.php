<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Controller;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return Inertia::render('Home', ["posts" => $posts]);
    }
}

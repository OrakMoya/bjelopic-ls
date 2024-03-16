<?php

namespace App\Http\Controllers;

use Inertia\Controller;
use Inertia\Inertia;
use Inertia\Response;

class AppController extends Controller
{
    public $counter = 0;
    public function increment(){
        $this->counter++;
    }
    public function decrement(){
        $this->counter--;
    }

    public function index(): Response
    {
        return Inertia::render('Home', [
            'title' => 'Hello World',
            'counter' => $this->counter
        ]);
    }
}

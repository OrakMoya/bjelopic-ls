<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterController extends Controller
{
    int $counter = 0;

    public function increment(){
        $this->counter++;
    }
    public function decrement(){
        $this->counter--;
    }
}

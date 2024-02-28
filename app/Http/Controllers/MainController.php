<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): View|Application|Factory
    {
        return view('index');
    }

    public function legals(): View|Application|Factory
    {
        return view('legals');
    }
}

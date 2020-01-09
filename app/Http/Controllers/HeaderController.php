<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HeaderController extends Controller
{
    public static function index()
    {
        return Category::orderBy('order')->get();
    }
}

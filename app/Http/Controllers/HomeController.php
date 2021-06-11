<?php

namespace App\Http\Controllers;

use App\Models\Toode;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tooted = Toode::all();
        return view('index');
    }

}

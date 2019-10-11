<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Katagori;

class KatagoriController extends Controller
{
    public function index()
    {
        $katagori = Katagori::all();
        return dd($katagori);
    }
}

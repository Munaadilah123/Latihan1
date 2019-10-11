<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;

class SatuanController extends Controller
{
    Public function index()
    {
        $satuan = Satuan::all();
        return dd($satuan);
    }
}

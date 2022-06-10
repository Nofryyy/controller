<?php

namespace App\Http\Controllers\Sipp\MasterSipp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Iluminate\Suport\Facades\Auth;

class KategoriBarangController extends Controller 

{
    public function index()
    {
        return view('sipp.VKategoriBarang');
    }
}
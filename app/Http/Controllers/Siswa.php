<?php

namespace App\Http\Controllers;
use App\Http\Models;

use Illuminate\Http\Request;

class Siswa extends Controller
{
    //
    public function index(){

        $siswa = ModelSiswa::all();
    }
}

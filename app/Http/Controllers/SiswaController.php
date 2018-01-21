<?php

namespace App\Http\Controllers;

use App\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function table()
    {
        $pablo = siswa::all();
        return view ('data',compact('pablo'));
    }
}

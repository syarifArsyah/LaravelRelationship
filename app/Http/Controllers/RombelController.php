<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    public function index()
    {
        $rombels = student::get();

        // dd($rombels);

        // return view('rombels', compact('rombels'));
        return view('rombels', ['rombels' => $rombels]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Edulevel;
use Illuminate\Http\Request;

class EdulevelController extends Controller
{
    public function data()
    {
        $edulevels = Edulevel::all();

        return view('edulevel.data', compact('edulevels'));
    }
}

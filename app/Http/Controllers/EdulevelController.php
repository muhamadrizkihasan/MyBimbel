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
    
    public function add()
    {
        return view('edulevel.add');
    }

    public function addProcess(Request $request)
    {
        Edulevel::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return redirect('edulevels')->witt('success', 'Jenjang berhasil ditambahkan!');
    }
}

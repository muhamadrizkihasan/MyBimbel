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

        return redirect('edulevels')->with('success', 'Jenjang berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $edulevel = Edulevel::where('id', $id)->first();

        return view('edulevel.edit', compact('edulevel'));
    }

    public function editProcess(Request $request, $id)
    {
        Edulevel::where('id', $id)->update([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return redirect('edulevels')->with('updated', 'Jenjang berhasil diubah!');
    }
}

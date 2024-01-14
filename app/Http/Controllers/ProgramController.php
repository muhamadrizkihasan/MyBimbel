<?php

namespace App\Http\Controllers;

use App\Models\Edulevel;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $programs = Program::all();
        $programs = Program::with('edulevel')->get();
        // $programs = Program::onlyTrashed()->get();


        return view('program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edulevels = Edulevel::all();

        return view('program.create', compact('edulevels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'edulevel_id' => 'required'
        ], [
            'edulevel_id.required' => 'The jenjang / edulevel field is required'
        ]);

        // Cara 1
        // $program = new Program;
        // $program->name = $request->name;
        // $program->edulevel_id = $request->edulevel_id;
        // $program->student_price = $request->student_price;
        // $program->student_max = $request->student_max;
        // $program->info = $request->info;
        // $program->save();

        // Cara 2 : Mass Asignment
        // Program::create([
        //     'name' => $request->name,
        //     'edulevel_id' => $request->edulevel_id,
        //     'student_price' => $request->student_price,
        //     'student_max' => $request->student_max,
        //     'info' => $request->info,
        // ]);
        
        // Cara 3 : Quick Mass Asignment
        Program::create($request->all());

        // Cara 4 : Gabungan Cara 1 & 2
        // $program = Program::create([
        //     'name' => $request->name,
        //     'edulevel_id' => $request->edulevel_id,
        //     'student_price' => $request->student_price,
        //     'student_max' => $request->student_max,
        //     'info' => $request->info,
        // ]);
        // $program->student_price = $request->student_price;
        // $program->save();

        return redirect('/programs')->with('success', 'Program berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        $program->makeHidden(['edulevel_id']);

        return view('program/show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        $edulevels = Edulevel::all();

        return view('program/edit', compact('program', 'edulevels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'name' => 'required|min:2',
            'edulevel_id' => 'required'
        ], [
            'edulevel_id.required' => 'The jenjang / edulevel field is required'
        ]);

        // Cara 1
        // $program->name = $request->name;
        // $program->edulevel_id = $request->edulevel_id;
        // $program->student_price = $request->student_price;
        // $program->student_max = $request->student_max;
        // $program->info = $request->info;
        // $program->save();

        // Cara 2 : Mass Asignment
        Program::where('id', $program->id)
            ->update([
            'name' => $request->name,
            'edulevel_id' => $request->edulevel_id,
            'student_price' => $request->student_price,
            'student_max' => $request->student_max,
            'info' => $request->info,
        ]);

        return redirect('/programs')->with('updated', 'Program berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        // Cara 1
        // $program->delete();

        // Cara 2
        // Program::destroy($program->id);

        // Cara 3
        Program::where('id', $program->id)->delete();

        return redirect('/programs')->with('deleted', 'Program berhasil dihapus!');
    }
}

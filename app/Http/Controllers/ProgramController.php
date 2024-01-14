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

        return $request;
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        //
    }
}

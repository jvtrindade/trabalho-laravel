<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    function index(){
        $cursos = DB::table('cursos')
        ->select()
        ->get();

        return view('cursos.index', [
            'cursos' => $cursos
        ]);
    }

    function create(){
        return view('cursos.create');
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        DB::table('cursos')->insert($data);

        return redirect('/cursos');
    }

    function edit($id){
        $curso = DB::table('cursos')
        ->find($id);

        return view('cursos.edit', [
            'curso' => $curso
        ]);
    }

    function update(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $id = array_shift($data);

        DB::table('cursos')
        ->where('id', $id)
        ->update($data);

        return redirect('/cursos');
    }

    function destroy($id){
        DB::table('cursos')
        ->where('id', $id)
        ->delete();

        return redirect('/cursos');
    }

    function show($id){
        $curso = DB::table('cursos')
        ->find($id);

        return view('cursos.show', ['curso' => $curso]);
    }
}


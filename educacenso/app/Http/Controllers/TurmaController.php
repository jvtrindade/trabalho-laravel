<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurmaController extends Controller
{
    function index() {
        $turmas = DB::table('turmas')
        ->select('*')
        ->addSelect(DB::raw('(select cursos.nome from cursos where cursos.id = turmas.curso_id) as curso'))
        ->get();

        return view('turmas.index', ['turmas' => $turmas]);
    }

    function create(){
        $cursos = DB::table('cursos')
        ->select()
        ->get();

        return view('turmas.create', ['cursos' => $cursos]);
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        DB::table('turmas')->insert($data);

        return redirect('/turmas');
    }

    function show($id) {
        $turma = DB::table('turmas')
        ->select('*')
        ->addSelect(DB::raw('(select cursos.nome from cursos where cursos.id = turmas.curso_id) as cursos'))
        ->where('turmas.id', $id)
        ->get();

        return view('turmas.show', ['turma' => $turma]);
    }

    function edit($id){
        $turma = DB::table('turmas')->find($id);
        $cursos = DB::table('cursos')
        ->select()
        ->get();

        return view('turmas.edit', ['turma' => $turma, 'cursos' => $cursos]);
    }

    function update(Request $request){
        $data = $request->all();

        unset($data['_token']);

        $id = array_shift($data);

        DB::table('turmas')->where('id', $id)->update(array_intersect_key($data, ['nome' => 1, 'curso_id' => 1]));

        return redirect('/turmas');
    }

    function destroy($id){
        DB::table('turmas')->where('id', $id)->delete();

        return redirect ('/turmas');
    }
}

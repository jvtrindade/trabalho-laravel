<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurmaController extends Controller
{
    function index() {
        print "oi";
        // $turmas = DB::table('turmas')
        // ->leftJoin('cursos', 'cursos.id', '=', 'turmas.curso_id')
        // ->select()
        // ->get();

        // return view('turmas.index', ['turmas' => $turmas]);
    }

    function create(){
        return view('turmas.create');
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        DB::table('turmas')->insert($data);

        return redirect('/turmas');
    }

    function show($id) {
        $turmas = DB::table('turmas')
        ->leftJoin('cursos', 'cursos.id', '=', 'turmas.curso_id')
        ->select()
        ->where('turmas.id', $id)
        ->get();

        return view('turmas.show', ['turma' => $turmas]);
    }

    function edit($id){
        $turma = DB::table('turmas')->find($id);

        return view('turmas.edit', ['turma' => $turma]);
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

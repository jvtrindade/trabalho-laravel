<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodoController extends Controller
{
    function index(){
        $periodos = DB::table('periodos')
        ->selectRaw("id, ano, DATE_FORMAT(dt_inicio, '%d/%m/%y') as dt_inicio, DATE_FORMAT(dt_fim, '%d/%m/%y') as dt_fim")
        ->get();

        return view('periodos.index', ['periodos' => $periodos]);
    }

    function create(){
        return view('periodos.create');
    }

    function store(Request $request){
        $data = $request->all();

        unset($data['_token']);

        DB::table('periodos')->insert($data);

        return redirect('/periodos');

    }


    function edit($id){
        $periodo = DB::table('periodos')->find($id);

        return view('periodos.edit', ['periodo' => $periodo]);

    }

    function update(Request $request){
        $data = $request->all();

        unset($data['_token']);

        DB::update("UPDATE periodos SET ano = :ano, dt_inicio = :dt_inicio, dt_fim = :dt_fim WHERE id = :id ", $data);

        return redirect('/periodos');

    }

    function show($id){
        $periodo = DB::table('periodos')
        ->selectRaw("id, ano, dt_inicio, dt_fim")
        ->find($id);

        return view('periodos.show', ['periodo' => $periodo]);
    }

    function destroy($id){
        DB::delete("DELETE FROM periodos WHERE id = ?", [$id]);

        return redirect('/periodos');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodoController extends Controller
{
    function index(){
        $periodos = DB::table('periodos')
        ->selectRaw("id, ano, dt_inicio, dt_fim")
        ->get();

        return view('transporte.index', ['periodos' => $periodos]);
    }

    function create(){
        return view('transporte.create');
    }

    function store(Request $request){
        $data = $request->all();

        unset($data['_token']);

        DB::table('periodos')->insert($data);

        return redirect('/transportes');

    }


    function edit($id){
        $periodos = DB::table('periodos')->find($id);

        return view();

    }

    function update(Request $request){
        $data = $request->all();

        unset($data['_token']);

        DB::update("UPDATE periodos SET ano = :ano, dt_inicio = :dt_inicio, dt_fim = :dt_fim WHERE id = :id ", $data);

        return redirect('/transportes');

    }

    function show($id){
        $periodo = DB::table('periodos')
        ->selectRaw("id, ano, dt_inicio, dt_fim")
        ->find($id);

        return view('transporte.periodo.show', ['periodo' => $periodo]);
    }

    function destroy($id){
        DB::delete("DELETE FROM periodos WHERE id = ?", [$id]);

        return redirect('/transportes');
    }

}

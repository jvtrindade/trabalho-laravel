<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespostaController extends Controller
{
    function index(){
        $hoje = Carbon::now()->format('Y-m-d');
        $periodos = DB::table("periodos")->select("dt_inicio", "dt_fim")->get();
        $ativo = false;
        foreach($periodos as $p){
            if($hoje > $p->dt_inicio && $hoje < $p->dt_fim ){
                $ativo = true;
                break;
            }
        }
        if($ativo == false){
            echo('Não há nenhum período ativo no momento.');
        }else{
            return redirect('/respostas/create');
        }
    }

    function create(){
        return view('respostas.create');
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        DB::table('respostas')->insert($data);

        return redirect('/respostas');
    }

    function edit($id){
        $resposta = DB::table('resposta')
        ->find($id);

        return view('respostas.edit', [
            'resposta' => $resposta
        ]);
    }

    function update(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $id = array_shift($data);

        DB::table('respostas')
        ->where('id', $id)
        ->update($data);

        redirect('/respostas');
    }

    function destroy($id){
        DB::table('respostas')
        ->where('id', $id)
        ->delete();

        return redirect('/respostas');
    }

    function show($id){
        $resposta = DB::table('respostas')
        ->find($id);

        return view('respostas.show', ['resposta' => $resposta]);
    }
}

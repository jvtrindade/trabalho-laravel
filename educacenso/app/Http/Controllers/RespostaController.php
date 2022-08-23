<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespostaController extends Controller
{
    function index(){
        $respostas = DB::table('respostas')
        ->select('*')
        ->addSelect(DB::raw('(select periodos.ano from periodos where periodos.id = respostas.periodo_id) as periodo'))
        ->addSelect(DB::raw('(select turmas.nome from turmas where turmas.id = respostas.turma_id) as turma'))
        ->get();

        foreach($respostas as $resposta){
            if($resposta->transporte == "onibus"){
                $resposta->transporte = "Ônibus";
            }elseif($resposta->transporte == "microonibus"){
                $resposta->transporte = "Micro-ônibus";
            }elseif($resposta->transporte == "van"){
                $resposta->transporte = "Van";
            }
            if($resposta->poder_publico_responsavel == "municipio"){
                $resposta->poder_publico_responsavel = "Município";
            }elseif($resposta->poder_publico_responsavel == "estado"){
                $resposta->poder_publico_responsavel = "Estado";
            }
        }

        return view('respostas.index', ['respostas' => $respostas]);
    }

    function create(){

        $hoje = Carbon::now()->format('Y-m-d');
        $periodos = DB::table("periodos")->select("dt_inicio", "dt_fim", "id")->get();
        $ativo = false;
        $periodo_id = 0;

        $cursos = DB::table('cursos')
        ->select()
        ->get();

        $turmas = DB::table('turmas')
        ->select()
        ->get();

        foreach($periodos as $p){
            if($hoje > $p->dt_inicio && $hoje < $p->dt_fim ){
                $ativo = true;
                $periodo_id = $p->id;
                break;
            }
        }
        if($ativo == false){
            echo('Não há nenhum período ativo no momento.');
            print('<br> <a href="/home/">Voltar</a>');
        }else{
            return view('respostas.create', [
                'periodo_id' => $periodo_id,
                'cursos' => $cursos,
                'turmas' => $turmas,
            ]);
        }


    }

    function store(Request $request){
        $hoje = Carbon::now()->format('Y-m-d');
        $periodos = DB::table("periodos")->select("dt_inicio", "dt_fim", "id")->get();
        $ativo = false;
        foreach($periodos as $p){
            if($hoje > $p->dt_inicio && $hoje < $p->dt_fim ){
                $ativo = true;
                break;
            }
        }
        if($ativo == true){
            $data = $request->all();
            unset($data['_token']);
            unset($data['curso_id']);

            var_dump($data);

            DB::table('respostas')->insert($data);

            return redirect('/respostas');
        }

    }

    function edit($id){
        $resposta = DB::table('respostas')
        ->find($id);

        $turmas = DB::table('turmas')
        ->select()
        ->get();

        $turma = DB::table('turmas')
        ->where('id', $resposta->turma_id)
        ->select()
        ->first();

        $cursos = DB::table('cursos')
        ->select()
        ->get();

        return view('respostas.edit', [
            'resposta' => $resposta,
            'cursos' => $cursos,
            'turmas' => $turmas,
            'turma' => $turma,
        ]);
    }

    function update(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $id = array_shift($data);

        DB::table('respostas')
        ->where('id', $id)
        ->update($data);

        return redirect('/respostas');
    }

    function destroy($id){
        DB::table('respostas')
        ->where('id', $id)
        ->delete();

        return redirect('/respostas');
    }

}

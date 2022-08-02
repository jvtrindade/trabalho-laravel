<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespostaController extends Controller
{
    function index(){

    }

    function create(){
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
            $periodos = DB::table('periodos')
            ->select()
            ->get();

            //$urlEstados = "https://servicodados.ibge.gov.br/api/v1/localidades/estados";
            //$estados = Request($urlEstados);
            //print $estados; // não consegui achar uma forma e fazer esse request

            // $urlCidades = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/".$uf."/municipios";
            // $cidades = Request($urlCidades);
            // $cidades = json_encode($cidades);

            return view('respostas.create', [
                //'estados' => $estados,
                // 'cidades' => $cidades
                'periodos' => $periodos
            ]);
        }
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

    function show(){
        $respostas = DB::table('respostas')
        ->select('*')
        ->addSelect(DB::raw('(select cursos.nome from cursos where cursos.id = respostas.curso_id) as curso'))
        ->get();

        return view('respostas.index', ['respostas' => $respostas]);
    }
}

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
        foreach($periodos as $p){
            if($hoje < $p['dt_inicio'] || $hoje > $p['dt_fim'] ){
                echo('Não há nenhum período ativo no momento.');
                die();
            }
        }
        
    }
}

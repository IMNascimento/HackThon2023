<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AgendaController;
use App\Models\User;

class SistemController extends Controller
{
    public function index()
    {


    }

    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }

    // user 
    public function indexUser()
    {
        return view('user.index');
    }

    public function agendaUser(Request $request)
    {
       $d = new AgendaController;
       $day = $d->day($d->nowDate());
        if ($request->tipo == 1) {
                $agenda = $d->getDateAgenda($d->nowDate(), 1);
                $agenda_seguinte = $d->getDateAgenda($d->nextDate(), 1);
                
        }elseif ($request->tipo == 2) {
                $agenda = $d->getDateAgenda($d->nowDate(), 2);
                $agenda_seguinte = $d->getDateAgenda($d->nextDate(), 2);
        }
            $result = array();
            foreach ($agenda as $value)
            {
                array_push($result, $value->date);
            }
            $check = array_diff($day, $result);
            $next_day = $d->day($d->nextDate());
            $re = array();
            foreach ($agenda_seguinte as $value)
            {
                array_push($re, $value->date);
            }
            $ch = array_diff($next_day, $re);
        if (count($agenda) < 1) {
            $return = $d->day($d->nowDate());
            return view('user.consulta',['return'=>$day, 'amanha'=>$next_day, 'tipo'=> $request->tipo]);
        }else {
            return view('user.consulta',['return'=>$check, 'tipo'=> $request->tipo, 'amanha'=>$ch]);
        }
    }

    public function consultaUser(Request $request)
    {
        $requestData = $request->all();
        $requestData['status'] = 'pendente';
        $db = new AgendaController;
        $db->store($requestData);
        return view('user.index');
    }


    // atendente
    public function indexAtendente()
    {
        $d = new AgendaController;
        $agenda = $d->getDateStatus($d->nowDate(), 'pendente');
        return view('atendente.dashboard',['return'=> $agenda]);
    }

    public function atendenteConsulta(Request $request)
    {
        $d = new AgendaController;
        $day = $d->day($d->nowDate());
        $agenda = $d->getDateAgendaAll($d->nowDate());
        $agenda_seguinte = $d->getDateAgendaAll($d->nextDate());
        $result = array();
        $tipo = array();
        foreach ($agenda as $value)
        {
            array_push($result, $value->date);
            array_push($tipo, $value->category);
        }
        $check = array_diff($day, $result);
        $next_day = $d->day($d->nextDate());
        $re = array();
        $ti = array();
        foreach ($agenda_seguinte as $value)
        {
            array_push($re, $value->date);
            array_push($ti, $value->category);
        }
        $ch = array_diff($next_day, $re);
         if (count($agenda) < 1) {
             $return = $d->day($d->nowDate());
             return view('atendente.consulta',['return'=>$day, 'amanha'=>$next_day, 'x'=>1, 'user'=>$request->id]);
         }else {
             return view('atendente.consulta',['return'=>$check, 'amanha'=>$ch, 'tipo'=>$tipo, 'ti'=>$ti, 'x'=>1,'user'=>$request->id]);
         }
    }

    public function getAtendenteConsulta()
    {
        return view('atendente.consulta', ['x'=>2]);
    }
    public function getUserAtendenteConsulta(Request $request)
    {
        $db = User::where('name','LIKE',"%$request->name%")->get();
        return view('atendente.consulta',['x'=>3, 'db'=>$db]);
    }
    public function consultaAtendente(Request $request)
    {
        $requestData = $request->all();
        $requestData['status'] = 'pendente';
        $db = new AgendaController;
        $db->store($requestData);
        return $this->indexAtendente();
    }

}

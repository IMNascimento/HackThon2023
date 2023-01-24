<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use Illuminate\Support\Facades\Auth;
use App\Models\Agenda;
use App\Models\Especificacao;
use App\Models\User;

class ConsultaController extends Controller
{
   
    public function index()
    {

        $tipo = Especificacao::where('user_id','=', Auth::user()->id)->get();
        if($tipo[0]["name"] == "medico"){
            $tipo = 1;
        }elseif($tipo[0]["name"] == "dentista"){
            $tipo = 2;
        }
        $date = date('Y-m-d');
        $return = Agenda::where('date', 'LIKE', "%$date%")->where('category', '=', $tipo)->where('status','=','pendente')->get();
        return view('medico.dashboard', ['return'=> $return]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        Agenda::where('id','=',$request->type)->update(['status'=>'Fechada']);
        $data = array(
            'user_id'=> $request->user,
            'exams'=> '   ',
            'pressure'=> '  ',
            'glucose'=> '   ',
            'status'=> "ABERTO",
            'description'=> '   ',
            'doctor'=> Auth::user()->id
        );
        $user = User::where('id','=', $data['user_id'])->get();
        $registro = Consulta::create($data);
        $result = Consulta::find($registro->id);
        $medico = Auth::user()->name;
        return view('medico.prontuario',['return'=>$result, 'medico'=> $medico, 'user'=> $user ]);
        
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $post = Consulta::findOrFail($id);
        $post->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

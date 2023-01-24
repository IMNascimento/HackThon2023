<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Consulta;

class AgendaController extends Controller
{
  
    public function nowDate()
    {
        return date("Y-m-d");
    }
    public function nextDate()
    {
        return date("Y-m-d", strtotime("+1 day"));
    }
    
    public function index()
    {
        // rota inicial
        Agenda::get();
    }

    
    public function create()
    {
        // rota de adicionar
        $result = Agenda::all();
        return $result;
    }

    public function store($data)
    {
        $agenda = new Agenda;
        $agenda->date = $data['date'];
        $agenda->user_id = $data['user'];
        $agenda->status = $data['status'];
        $agenda->category = $data['type'];
        $agenda->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Agenda::findOrFail($id);
        return view('editAgenda', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $post = Agenda::findOrFail($id);
        $post->update($requestData);

      return redirect('dashboard/Agenda')->with('success', 'Funcionario atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agenda::destroy($id);
        return redirect('dashboard/Agenda')->with('success', 'Funcionario deletado!');
    }




    public function day($date)
    {
        return array(
            $date . ' 08:00:00', 
            $date . ' 08:30:00',
            $date . ' 09:00:00', 
            $date . ' 09:30:00',
            $date . ' 10:00:00', 
            $date . ' 10:30:00',
            $date . ' 11:00:00', 
            $date . ' 11:30:00',
            $date . ' 12:00:00', 
            $date . ' 12:30:00',
            $date . ' 13:00:00', 
            $date . ' 13:30:00',
            $date . ' 14:00:00', 
            $date . ' 14:30:00',
            $date . ' 15:00:00', 
            $date . ' 15:30:00',
            $date . ' 16:00:00', 
            $date . ' 16:30:00',
            $date . ' 17:00:00', 
            $date . ' 17:30:00',
            $date . ' 18:00:00'
        );
    }
    // db 
    public function getDateAgenda(string $date, int $tipo)
    {
        $data = Agenda::where('date', 'LIKE', "%$date%")->where('category', '=', $tipo)->get();
        return $data;
    }

    public function getDateAgendaAll(string $date)
    {
        $data = Agenda::where('date', 'LIKE', "%$date%")->get();
        return $data;
    }

    public function getDateStatus(string $date, string $status)
    {
        $data = Agenda::where('date', 'LIKE', "%$date%")->where('status', '=', $status)->get();
        return $data;
    }







}

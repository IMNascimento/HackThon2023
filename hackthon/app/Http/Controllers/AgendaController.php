<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Consulta;

class AgendaController extends Controller
{
   
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

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Agenda::create($requestData);
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
}

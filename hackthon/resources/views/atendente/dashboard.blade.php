@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    <x-atendente.navbar/>
    <div class="container" style="margin-top: 40px;">
        <table class="table table-dark">
            <thead>
            <td># Data/ HORA</td>
            <td># TIPO</td>
            <td># Consulta</td>
            <td># OPÇÕES</td>
            </thead>
            <tbody>
                @if (count($return) < 1)
                <div class="alert alert-danger" role="alert">
                    Nenhuma consulta marcada!
                  </div> 
                @else
                @foreach ($return as $k)
                            <form action="#" method="post">
                                @csrf
                                <tr class="table-active">
                                    <td>
                                        # {{$k->date}}
                                    </td>
                                    <td>
                                        @if ($k->category == "1")
                                            Médico
                                        @elseif($k->category == "2")
                                            Dentista
                                        @endif
                                    </td>
                                    <td>
                                        <button disabled="disabled" class="btn btn-primary">Marcado</button>
                                    </td>
                                    <td>
                                        <input type="hidden" name="date" value="{{$k->date}}">
                                        <input type="hidden" name="user" value="{{auth()->user()->id}}">
                                        <input type="hidden" name="type" value="{{$k->category}}">
                                        <button type="submit" class="btn btn-danger">Cancelar</button>
                                    </div>
                                    </td>
                                </tr>
                            </form>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
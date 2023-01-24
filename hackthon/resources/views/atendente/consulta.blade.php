@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    <x-atendente.navbar/>
    <div class="container">
    @if ($x == 1)
    <table class="table table-dark">
        <thead>
        <td># Data/ HORA</td>
        <td># TIPO</td>
        <td># OPÇÕES</td>
        </thead>
        <tbody>
            @php
                $i= 0;
            @endphp
            @foreach ($return as $k)
                        <form action="/atendente/marcar/consulta/user" method="post">
                            @csrf
                            <tr class="table-active">
                                <td>
                                    # {{$k}}
                                </td>
                                <td>
                                    @if ($tipo[$i] == "1")
                                        Médico
                                    @elseif($tipo[$i] == "2")
                                        Dentista
                                    @endif
                                </td>
                                <td>
                                    <input type="hidden" name="date" value="{{$k}}">
                                    <input type="hidden" name="user" value="{{$user}}">
                                    <input type="hidden" name="type" value="{{$tipo[$i]}}">
                                    <button type="submit" class="btn btn-success">Marcar Consulta</button>
                                </div>
                                </td>
                            </tr>
                        </form>
                @endforeach
            <tr>
                <td class="table-light">Próxima agenda</td>
                <td class="table-light">Próxima agenda</td>
                <td class="table-light">Próxima agenda</td>
            </tr>
            @foreach ($amanha as $a)
            <form action="/atendente/marcar/consulta/user" method="post">
                @csrf
            <tr class="table-active">
                <td>
                    # {{$a}}
                </td>
                <td>
                    @if ($ti[$i] == "1")
                        medico
                    @elseif($ti[$i] == "2")
                        Dentista
                    @endif
                </td>
                <td>
                    <input type="hidden" name="date" value="{{$a}}">
                    <input type="hidden" name="user" value="{{$user}}">
                    <input type="hidden" name="type" value="{{$tipo[$i]}}">
                    <button type="submit" class="btn btn-success">Marcar Consulta</button>
                </div>
                </td>
            </tr> 
        </form>
            @endforeach
        </tbody>
    </table>
    @elseif($x == 2)
        <div class="input-group mb-3">
            <form action="/atendente/user/consulta" method="post">
                @csrf
                <input type="text" class="form-control" name="name" placeholder="Nome do usuario"  aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </form>
        </div>

    @elseif($x == 3)
        <div class="input-group mb-3">
            <form action="/atendente/user/consulta" method="post">
                @csrf
                <input type="text" class="form-control" name="name" placeholder="Nome do usuario"  aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <td>#id</td>
                        <td>#name</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
        @foreach ($db as $k)
         <tr>
            <td>{{$k->id}}</td>
            <td>{{$k->name}}</td>
            <td>
                <form action="/atendente/consulta" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$k->id}}">
                    <button type="submit" class="btn btn-success">Selecionar</button>
                </form>
            </td>
         </tr>
        @endforeach
                </tbody>
            </table>
        </div>
    @endif


</div>
@endsection
@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    <x-user.navbar/>
    <!--<input type="datetime-local" name='date'>-->
    <!--fazer com tabela e radios -->
        <table class="table table-dark">
            <thead>
            <td># Data/ HORA</td>
            <td># TIPO</td>
            <td># OPÇÕES</td>
            </thead>
            <tbody>
                @foreach ($return as $k)
                            <form action="/user/marcar/consulta" method="post">
                                @csrf
                                <tr class="table-active">
                                    <td>
                                        # {{$k}}
                                    </td>
                                    <td>
                                        @if ($tipo == "1")
                                            Médico
                                        @elseif($tipo == "2")
                                            Dentista
                                        @endif
                                    </td>
                                    <td>
                                        <input type="hidden" name="date" value="{{$k}}">
                                        <input type="hidden" name="user" value="{{auth()->user()->id}}">
                                        <input type="hidden" name="type" value="{{$tipo}}">
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
                <form action="/user/marcar/consulta" method="post">
                    @csrf
                <tr class="table-active">
                    <td>
                        # {{$a}}
                    </td>
                    <td>
                        @if ($tipo == "1")
                            medico
                        @elseif($tipo == "2")
                            Dentista
                        @endif
                    </td>
                    <td>
                        <input type="hidden" name="date" value="{{$a}}">
                        <input type="hidden" name="user" value="{{auth()->user()->id}}">
                        <input type="hidden" name="type" value="{{$tipo}}">
                        <button type="submit" class="btn btn-success">Marcar Consulta</button>
                    </div>
                    </td>
                </tr> 
            </form>
                @endforeach
            </tbody>
        </table>
    
    </div>
@endsection
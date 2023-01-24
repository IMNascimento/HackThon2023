@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    <x-medico.navbar/>
    <table class="table table-dark">
        <thead>
        <td># Data/ HORA</td>
        <td># TIPO</td>
        <td># OPÇÕES</td>
        </thead>
        <tbody>
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
                                    <input type="hidden" name="date" value="{{$k->date}}">
                                    <input type="hidden" name="user" value="{{$k->user_id}}">
                                    <input type="hidden" name="type" value="{{$k->id}}">
                                    <button type="submit" class="btn btn-success">Iniciar</button>
                                </div>
                                </td>
                            </tr>
                        </form>
                @endforeach
        </tbody>
    </table>

</div>
    <!--fazer com tabela e radios -->
@endsection
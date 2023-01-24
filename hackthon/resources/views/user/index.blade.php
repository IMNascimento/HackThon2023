@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    <x-user.navbar/>
    <!--<input type="datetime-local" name='date'>-->
    <!--fazer com tabela e radios -->
    <div class="container" style="margin-top: 40px;">
        <form action="/user/agenda/" method="post">
            @csrf
            <select class="form-select" aria-label="Default select example" name="tipo">
                <option selected>Tipo de consulta</option>
                <option value="1">Medico</option>
                <option value="2">Dentista</option>
            </select>
            <!--<div style="margin-top:10px; margin-bottom:10px;">
                <strong>Dia de marcação: </strong>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" name="hoje" checked>
                    <label class="form-check-label" for="inlineRadio1">Hoje</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" name="amanha">
                    <label class="form-check-label" for="inlineRadio2">Amanhã</label>
                </div>
            </div>-->
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Ir para agenda</button>
                </div>
            </div>
        </form>
@endsection
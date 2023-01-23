@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    <x-atendente.navbar/>
    <!--<input type="datetime-local" name='date'>-->
    <!--fazer com tabela e radios -->
    <div class="container">
        <select class="form-select" aria-label="Default select example">
            <option selected>Selecione a data</option>
            <option value="1">20/10/2023</option>
            <option value="2">21/10/2023</option>
            <option value="3">22/10/2023</option>
        </select>
        <table class="table table-dark">
            <thead>
            <td>hora</td>
            <td>Tipo</td>
            <td>Opções</td>
            </thead>
            <tbody>
            <tr class="table-active">
                    <td>
                        # 20/10/2023 14:00
                    </td>
                    <td>Clinico Geral</td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Marca Consulta
                        </label>
                    </div>
                    </td>
            </tr>
            <tr class="table-active">
                    <td>
                        # 20/10/2023 14:30
                    </td>
                    <td>Clinico Geral</td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Marca Consulta
                        </label>
                    </div>
                    </td>
                </tr>
            <tr class="table-active">
                    <td>
                        # 20/10/2023 15:00
                    </td>
                    <td>Clinico Geral</td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Marca Consulta
                        </label>
                    </div>
                    </td>
                </tr>
            <tr class="table-active">
                    <td>
                        # 20/10/2023 15:30
                    </td>
                    <td>Clinico Geral</td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Marca Consulta
                        </label>
                    </div>
                    </td>
                </tr>
            <tr class="table-active">
                    <td>
                        # 20/10/2023 16:00
                    </td>
                    <td>Clinico Geral</td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Marca Consulta
                        </label>
                    </div>
                    </td>
                </tr>
                <tr class="table-active">
                        <td>
                            # 20/10/2023 16:30
                        </td>
                        <td>Clinico Geral</td>
                        <td>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Marca Consulta
                            </label>
                        </div>
                        </td>
                    </tr>
                <tr>
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="button">Marcar</button>
                    </div>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
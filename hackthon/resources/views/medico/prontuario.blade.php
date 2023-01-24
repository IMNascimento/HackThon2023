@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    <x-medico.navbar/>
<div class="container">
    <form action="{{ url('/consulta/' . $return->id) }}" method="post">
        {{ method_field('PATCH') }}
        @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Paciente</label>
        @foreach ( $user as $user )
        <input type="name" class="form-control" value="{{$user->name}}" id="exampleFormControlInput1" disabled>
        @endforeach
        <label for="exampleFormControlInput1" class="form-label">Médico</label>
        <input type="doctor" class="form-control" id="exampleFormControlInput1" value="{{$medico}}" disabled>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Glicose</label>
        <input type="text" name="glucose" class="form-control" id="exampleFormControlInput1" value="{{$return->glucose}}">
        <label for="exampleFormControlInput1" class="form-label">Pressão</label>
        <input type="hidden" name="status" value="Fechado">
        <input type="text" class="form-control" name="pressure" id="exampleFormControlInput1" {{$return->pressure}}>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Exames</label>
        <textarea class="form-control"  name="exams" id="exampleFormControlTextarea1" rows="3">{{$return->exams}}</textarea>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3">{{$return->description}}</textarea>
          </div>
      </div>
      <div>
        <button type="submit" class="btn btn-success">Finalizar consulta</button>
      </div>
    </form>
</div>
    <!--fazer com tabela e radios -->
@endsection
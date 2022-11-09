@extends('plantilla')

@section('contenido')
<h1 class="text-center">Formulario</h1>
<form method="post" action="{{ route('validador') }}">
    @csrf 
    <div>
        <label class="form-label" name="labelTitulo">Usuario:</label>
        <input type="text" class="form-control" name="txtUsuario" value="{{old ('txtUsuario')}}">
        <p class="fw-bold text-danger">{{$errors->first('txtUsuario')}}</p>
    </div>

    <div>
        <label class="form-label" name="labelRecuerdo">No.computadora:</label>
        <input type="text" class="form-control" name="txtNo_computadora" value="{{old ('txtNo_computadora')}}">
        <p class="fw-bold text-danger">{{$errors->first('txtNo_computadora')}}</p>
    </div>

    <div>
        <label class="form-label" name="labelRecuerdo">Tiempo</label>
        <input type="text" class="form-control" name="txtTiempo" value="{{old ('txtTiempo')}}">
        <p class="fw-bold text-danger">{{$errors->first('txtTiempo')}}</p>
    </div>

    <div>
        <label class="form-label" name="labelRecuerdo">Fecha</label>
        <input type="text" class="form-control" name="txtFecha" value="{{old ('txtFecha')}}">
        <p class="fw-bold text-danger">{{$errors->first('txtFecha')}}</p>
    </div>
    
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Formulario incompleto!</strong>{{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
        @endforeach
    @endif

    <div class="text-center">
        <button type="submit" name="btnGuardar" class="btn btn-lg btn-block mt-5 btn-danger">Guardar</button>
    </div>
</form>
@stop
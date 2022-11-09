@extends('plantilla')

@section('contenido')
<h1 class="text-center">Consulta</h1>
<div class="mt-5 container text-center w-50">
    <table class="table table-bordered border-primary">
    <thead>
        <tr>
        <th scope="col">Usuario</th>
        <th scope="col">No.Computadora</th>
        <th scope="col">Tiempo</th>
        <th scope="col">Fecha</th>

        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Daniel</td>
        <td>1</td>
        <td>5 hrs</td>
        <td>06/11/22</td>

        </tr>

        <tr>
        <td>Abril</td>
        <td>2</td>
        <td>30 min</td>
        <td>09/11/22</td>
        </tr>

        <tr>
        <td>Yezenia</td>
        <td>3</td>
        <td>1 hrs</td>
        <td>08/11/22</td>        
        </tr>

        
    </tbody>
    </table>
</div>
@stop
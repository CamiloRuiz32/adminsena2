@extends('layouts.app')

@section('content')

<h1>Formulario de Computadores</h1>

<form action="{{route('computers.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Numero:
    <br>
    <input type="number" name="number">
</label>
<br>


<label>
    Marca:
    <br>
    <input type="text" name="brand">
</label>
<br>

<br>
<br>

<button type="submit">Crear:</button>
</form>

@endsection
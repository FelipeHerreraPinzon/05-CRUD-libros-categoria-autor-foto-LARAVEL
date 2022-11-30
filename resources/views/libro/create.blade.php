@extends('layouts.header')
@section('title', 'CREAR LIBRO')

@section('content')
    

<div class="card m-5">
    <div class="card-header">
        CREAR LIBRO
    </div>
    <div class="card-body">
<form method="POST" action="{{route('libros.store')}}" enctype="multipart/form-data">
@csrf
    
<input class="form-control" type="text" name="nombre" placeholder="INGRESA NOMBRE" required>
<br>
<div class="form-group">
    <select id="my-select" class="form-control" name="categoria_id">
    <option selected disabled>SELECCIONA CATEGORIA</option>
    @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
    @endforeach    
    </select>
</div>
<br>
<div class="form-group">
    <select id="my-select" class="form-control" name="autor_id">
    <option selected disabled>SELECCIONA AUTOR</option>
    @foreach($autores as $autor)
        <option value="{{$autor->id}}">{{$autor->nombres." ".$autor->apellidos}}</option>
    @endforeach    
    </select>
</div>
<br>

<input type="submit" name="enviar" value="ENVIAR">

</form>
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@endsection

@extends('layouts.footer')
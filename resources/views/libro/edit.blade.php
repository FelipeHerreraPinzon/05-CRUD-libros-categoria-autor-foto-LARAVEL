@extends('layouts.header')
@section('title', 'EDITAR LIBRO')

@section('content')
    

<div class="card m-5">
    <div class="card-header">
        EDITAR LIBRO
    </div>
    <div class="card-body">
<form method="POST" action="{{route('libros.update', $libro)}}" enctype="multipart/form-data">
@csrf
@method('put') 
<input class="form-control" type="text" name="nombre" value="{{$libro->nombre}}" required>
<br>
<div class="form-group">
    <select id="my-select" class="form-control" name="categoria_id">
    @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}" placeholder="{{$libro->categorias->nombre}}">{{$categoria->nombre}}</option>
    @endforeach    
    </select>
</div>
<br>
<div class="form-group">
    <select id="my-select" class="form-control" name="autor_id">
    @foreach($autores as $autor)
        <option value="{{$autor->id}}" placeholder="{{$libro->autores->nombres." ".$libro->autores->apellidos}}">{{$autor->nombres." ".$autor->apellidos}}</option>
    @endforeach    
    </select>
</div>
<br>

<input type="submit" name="enviar" value="ACTUALIZAR">

</form>
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@endsection

@extends('layouts.footer')
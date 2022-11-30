@extends('layouts.header')
@section('title', 'CREAR AUTOR')

@section('content')
    

<div class="card m-5">
    <div class="card-header">
        CREAR AUTOR
    </div>
    <div class="card-body">
<form method="POST" action="{{route('autor.store')}}" enctype="multipart/form-data">
@csrf
    
<input class="form-control" type="text" name="nombres" placeholder="INGRESA NOMBRE" required>
<br>
<input class="form-control" type="text" name="apellidos" placeholder="INGRESA APELLIDOS" required>
<br>
<input type="file" name="imagen">
<br>
<input type="submit" name="enviar" value="ENVIAR" class="btn btn-success">

</form>
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@endsection

@extends('layouts.footer')
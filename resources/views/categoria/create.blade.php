@extends('layouts.header')
@section('title', 'CREAR CATEGORIA')

@section('content')
    

<div class="card m-5">
    <div class="card-header">
        CREAR CATEGORIA
    </div>
    <div class="card-body">
<form method="POST" action="{{route('categorias.store')}}" enctype="multipart/form-data">
@csrf
    
<input class="form-control" type="text" name="nombre" placeholder="INGRESA NOMBRE" required>
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
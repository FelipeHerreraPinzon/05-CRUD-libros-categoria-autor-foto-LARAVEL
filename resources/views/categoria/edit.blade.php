@extends('layouts.header')
@section('title', 'EDITAR CATEGORIA')

@section('content')

<div class="card m-5">
    <div class="card-header">
        EDITAR CATEGORIA
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('categorias.update', $categoria)}}" enctype="multipart/form-data">
            @csrf
            @method('put')    
            
            <input class="form-control" type="text" name="nombre" value="{{$categoria->nombre}}">
            <br>
            
            <input type="submit" name="enviar" value="ACTUALIZAR" class="btn btn-success">
            
            </form>
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@endsection

@extends('layouts.footer')





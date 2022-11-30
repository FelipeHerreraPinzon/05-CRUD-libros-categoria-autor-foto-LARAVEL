@extends('layouts.header')
@section('title', 'EDITAR AUTOR')

@section('content')
<div class="card m-5">
    <div class="card-header">
       EDITAR AUTOR
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('autor.update', $autor)}}" enctype="multipart/form-data">
            @csrf
            @method('put')    
            
            <input class="form-control" type="text" name="nombres" value="{{$autor->nombres}}">
            <br>
            <input class="form-control" type="text" name="apellidos" value="{{$autor->apellidos}}">
            <br>
            <input type="file" name="imagen">
            <img src="{{ asset('uploads/'.$autor->imagen) }}" width="70px" height="70px" alt=""> 
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





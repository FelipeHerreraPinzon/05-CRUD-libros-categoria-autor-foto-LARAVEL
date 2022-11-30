@extends('layouts.header')
@section('title', 'AUTOR')

@section('content')

<a href="{{route('autor.index')}}" class="btn btn-secondary"><h3>volver</h3></a>

<div class="card m-5">
    <div class="card-header">
        <img src="{{ asset('uploads/'.$autor->imagen) }}" width="100px" alt="">
        {{$autor->id}} {{$autor->nombres}} {{$autor->apellidos}}
    </div>
    <div class="card-body">
        
        <table class= "table table-success text-center">
            <th>EL AUTOR <h4> {{$autor->nombres}} {{$autor->apellidos}} </h4> TIENE LOS LIBROS</th>
            @foreach ($autor->libros as $registro)
            <tr>
                <td><h3>{{$registro->nombre}}</h3></td>
            </tr>
            
        @endforeach
        
        
        </table>
    </div>
    
    <div class="card-footer text-muted">
        <br>
    </div>
</div>



@extends('layouts.footer')

@endsection
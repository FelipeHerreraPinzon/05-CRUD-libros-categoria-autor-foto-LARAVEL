@extends('layouts.header')
@section('title', 'CATEGORIA')

@section('content')

<a href="{{route('categorias.index')}}" class="btn btn-secondary"><h3>volver</h3></a>

<div class="card m-5">
    <div class="card-header">
        {{$categoria->id}} {{$categoria->nombre}} 
    </div>
    <div class="card-body">
        
        <table class= "table table-primary text-center">
            <th>LA CATEGORIA <h4> {{$categoria->nombre}}  </h4> TIENE LOS LIBROS</th>
            @foreach ($categoria->libros as $registro)
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


@endsection

@extends('layouts.footer')




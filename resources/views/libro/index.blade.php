@extends('layouts.header')

@section('title', 'LIBROS')



@section('content')

<a href="{{route('libros.create')}}" class="btn btn-success mt-3"><i class="fa-solid fa-square-plus"></i> CREAR LIBRO</a>

<div class="table-responsive m-5">
    <table class="table table-primary table-striped table-bordered" id="tabla_1">
        <thead class="table table-danger ">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">AUTOR</th>
                <th scope="col">VER</th>
                <th scope="col">EDITAR</th>
                <th scope="col">BORRAR</th>
            </tr>
        </thead>
        <tbody>
        @foreach($libros as $libro)
            <tr>
                <td>{{$libro->id}}</td>
                <td>{{$libro->nombre}}</td>
                <td>{{$libro->categorias->nombre}}</td>
                <td>{{$libro->autores->nombres." ".$libro->autores->apellidos}}</td>
            <td><a href="{{route('libros.show', $libro)}}" class="btn btn-info"><i class="fa-solid fa-circle-info"></i> Ver</a></td> 
            <td><a href="{{route('libros.edit', $libro)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
            <td>
                <form action="{{route('libros.destroy', $libro)}}" method="POST">
                @csrf
                @method('delete')
                <button  type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> eliminar</button>
                </form>
            </td>    
               
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>

<script>

var myTable = document.querySelector("#tabla_1");
var dataTable = new DataTable(myTable);

</script>


@endsection


@extends('layouts.footer')
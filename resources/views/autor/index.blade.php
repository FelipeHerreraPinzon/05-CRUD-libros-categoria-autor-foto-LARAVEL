@extends('layouts.header')

@section('title', 'AUTORES')



@section('content')

<a href="{{route('autor.create')}}" class="btn btn-success mt-3"><i class="fa-solid fa-square-plus"></i> CREAR AUTOR</a>

<div class="table-responsive m-5">
    <table class="table table-primary table-striped table-bordered" id="tabla_1">
        <thead class="table table-danger ">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">IMAGEN</th>
                <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">VER</th>
                <th scope="col">EDITAR</th>
                <th scope="col">BORRAR</th>
            </tr>
        </thead>
        <tbody>
        @foreach($autores as $autor)
            <tr>
                <td>{{$autor->id}}</td>
                <td><img src="{{ asset('uploads/'.$autor->imagen) }}" width="70px" height="70px" alt=""></td>
                <td>{{$autor->nombres}}</td>
                <td>{{$autor->apellidos}}</td>
            <td><a href="{{route('autor.show', $autor)}}" class="btn btn-info"><i class="fa-solid fa-circle-info"></i> Ver</a></td> 
            <td><a href="{{route('autor.edit', $autor)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
            <td>
                <form action="{{route('autor.destroy', $autor)}}" method="POST">
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
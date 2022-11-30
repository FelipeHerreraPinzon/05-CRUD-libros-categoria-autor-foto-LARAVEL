<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Categoria;
use App\Models\Autor;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();

        return view('libro.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libro = new Libro();

        //$categorias= Categoria::pluck('nombre', 'id');
        $categorias= Categoria::all();
        //$autores= Autor::pluck('apellidos', 'nombres', 'id');
        $autores= Autor::all();
        return view('libro.create', compact('libro', 'categorias', 'autores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = new Libro();
        $libro -> nombre = $request -> nombre;
        $libro -> categoria_id = $request -> categoria_id;
        $libro -> autor_id = $request -> autor_id;
        
        $libro -> save();
        
        return redirect() -> route('libros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('libro.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        $categorias= Categoria::all();
        $autores= Autor::all();
        return view('libro.edit', compact('libro', 'categorias', 'autores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $libro -> nombre = $request -> nombre;
            $libro -> categoria_id = $request -> categoria_id;
            $libro -> autor_id = $request -> autor_id;
            
            $libro -> save();
            
            return redirect() -> route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro -> delete();
        return redirect() -> route('libros.index');
    }
}

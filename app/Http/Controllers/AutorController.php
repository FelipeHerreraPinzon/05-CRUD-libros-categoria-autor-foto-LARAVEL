<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        return view('autor.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autor = new Autor();
        $autor -> nombres = $request -> nombres;
        $autor -> apellidos = $request -> apellidos;

        if($request->hasfile('imagen'))
        {
            $file = $request->file('imagen');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $autor->imagen = $filename;
        }
        
        $autor -> save();
        
        return redirect() -> route('autor.show', $autor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        return view('autor.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        return view('autor.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        $autor -> nombres = $request -> nombres;
        $autor -> apellidos = $request -> apellidos;

        if($request->hasfile('imagen'))
        {

            $destination = 'uploads/'.$autor->imagen;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('imagen');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $autor->imagen = $filename;
        }
        $autor -> save();
        return redirect() -> route('autor.show', $autor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        $destination = 'uploads/'.$autor->imagen;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $autor -> delete();
        return redirect() -> route('autor.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Http\Requests\CategoriaFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            
            $query=trim($request->get('searchText'));
            $categorias=DB::table('categorias')
            ->where('nombre','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            ->orderBy('idcategoria','desc')
            ->paginate(7);

            return view('almacen.categoria.index', [
                "categorias" => $categorias,
                "searchText" => $query 
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaFormRequest $request)
    {
        $categoria=new Categoria;
        $categoria->nombre =$request->get('nombre');
        $categoria->descripcion =$request->get('descripcion');
        $categoria->condicion='1';
        $categoria->save();

        return Redirect::to('almacen/categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('almacen.categoria.show', ["categorias"=>Categoria::finOrFail()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('almacen.categoria.edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaFormRequest $request, $id)
    {
         $categoria=Categoria::findOrFail($id);
         $categoria->nombre =$request->get('nombre');
         $categoria->descripcion =$request->get('descripcion');
         $categoria->update();
         return Redirect::to('almacen/categoria');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->condicion='0';
        $categoria->update();

        return Redirect::to('almacen/categoria');
    }
}

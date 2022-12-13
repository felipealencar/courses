<?php

namespace App\Http\Controllers;

use App\Models\Artigo as Artigo;
use App\Http\Resources\Artigo as ArtigoResource;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artigos = Artigo::paginate(15);
        return ArtigoResource::collection($artigos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artigo = new Artigo;
        $artigo->titulo = $request->input('titulo');
        $artigo->conteudo = $request->input('conteudo');

        if($artigo->save()){
            return new ArtigoResource($artigo);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\image.pngResponse
     */
    public function show($id)
    {
        $artigo = Artigo::findOrFail($id);
        return new ArtigoResource($artigo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artigo = Artigo::findOrFail( $request->id );
        $artigo->titulo = $request->input('titulo');
        $artigo->conteudo = $request->input('conteudo');

        if( $artigo->save() ){
            return new ArtigoResource($artigo);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artigo = Artigo::findOrFail( $id );
        if( $artigo->delete() ){
            return new ArtigoResource($artigo);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//dd($request->all());
        Cliente::create(['nome'=>$request->nome, 'telefone'=>$request->telefone, 'cidade'=>$request->cidade, 'produto_desejado'=>$request->produto_desejado,
       'tipo_de_compra'=>$request->tipo_de_compra
    ]);
    
    return 'Cadastrado com sucesso!';}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente= Cliente::findOrFail($id);
        return view('layouts.show', ['cliente' =>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente= Cliente::findOrFail($id);
        return view('layouts.edit', ['cliente' =>$cliente]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente= Cliente::findOrFail($id);

        $cliente::update([
        'nome'=>$request->input('nome'), 
        'telefone'=>$request->input('telefone'), 
        'cidade'=>$request->input('cidade'),
         'produto_desejado'=>$request->input('produto_desejado'),
        'tipo_de_compra'=>$request->input('tipo_de_compra')]);
        return 'Cliente atualizado!';
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}

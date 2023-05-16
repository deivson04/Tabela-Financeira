<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // Lista todos os registro do banco de dados
    public function index()
    {
       $data = Users::all();
       
       return response()->json(['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    // Guarda todos os dados no banco de dados
    public function store(Request $request)
    {
        $data = $request->all();
        
        Users::create($data);
        
        return response()->json(['registrado' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    // Faz a buscar pelo ID referente
     public function show($id)
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
    
    // Atualiza uma informação do banco de dados
    public function update(Request $request, $id)
    {
        $dataRequest = $request->all();
        $data = Users::findOrfail($id); 
        $data->update($dataRequest);
       
        return response()->json(['msg' => 'Dados Atualizado com sucesso!', 'atualizado' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    // Deleta uma informação na tabela
    public function destroy($id)
    {
        $data = Users::find($id);
        $data->delete();

        return response()->json(['message' => 'Registro excluido com sucesso', 'data' => $data]);
    }
}

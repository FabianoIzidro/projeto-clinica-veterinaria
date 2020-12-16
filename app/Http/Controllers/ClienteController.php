<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class clienteController extends Controller
{
    public function cadastro_C() {
        return view ('cliente/cadastro', ['cliente' => new Cliente]);
    }
 
    public function voltar_C() {
        return view ('menu');
    }
    public function retornar_C() {
        $dados['clientes'] = Cliente::all();
        return view ('cliente/listar', $dados);
    }

    public function telalogin_C() {
        return view ('login');
    }

    public function cadastrar_C(Request $request) {

        Cliente::create($request->except('_token'));
       

        return redirect()->route('listar_C')->with('sucesso', ' cliente cadastro com sucesso');
    }

    public function listar_C() {
        $dados['clientes'] = Cliente::all();
        return  view ('cliente/listar', $dados);
    
    }

    public function visualizar_C($id) {
        $dados =  ['cliente' => Cliente::findOrFail($id)];
        return view ('cliente/visualizar', $dados);
    }

    public function edicao_C($id) {
        $dados =  ['cliente' => Cliente::findOrFail($id)];
        return view ('cliente/editar', $dados);
    }

    public function editar_C(Request $request, $id) {

        Cliente::where('id', $id)->update($request->except('_token'));
        return redirect()->route('listar_C')->with('sucesso', ' cliente atualizado com sucesso');
    }

    public function excluir_C($id) {
        Cliente::destroy($id);
        return redirect()->route('listar_C')->with('sucesso', ' cliente excluido com sucesso');
    }

}
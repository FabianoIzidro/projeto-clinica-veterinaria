<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class animalController extends Controller
{
    public function cadastro_A() {
        return view ('animal/cadastro', ['animal' => new Animal]);
    }

    public function voltar_A() {
        return view ('menu');
    }
    public function retornar_A() {
        $dados['animais'] = Animal::all();
        return view ('animal/listar', $dados);
    }

    public function telalogin_A() {
        return view ('login');
    }

    public function cadastrar_A(Request $request) {

        Animal::create($request->except('_token'));

        return redirect()->route('listar_A')->with('sucesso', 'animal cadastro com sucesso');
    }

    public function listar_A() {
        $dados['animais'] = Animal::all();
        return view ('animal/listar', $dados);
    }

    public function visualizar_A($id) {
        $dados =  ['animal' => Animal::findOrFail($id)];
        return view ('animal/visualizar', $dados);
    }

    public function edicao_A($id) {
        $dados =  ['animal' => Animal::findOrFail($id)];
        return view ('animal/editar', $dados);
    }

    public function editar_A(Request $request, $id) {

        Animal::where('id', $id)->update($request->except('_token'));
        return redirect()->route('listar_A')->with('sucesso', ' animal atualizado com sucesso');
    }

    public function excluir_A($id) {
        Animal::destroy($id);
        return redirect()->route('listar_A')->with('sucesso', ' cliente excluido com sucesso');
    }

}

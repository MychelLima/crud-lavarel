<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function index(){
        $cadastro = Cadastro::all();

        return view('cadastrar', ['cadatro' => $cadastro]);
    }

    public function store(Request $request){

        $cadastro = new Cadastro;

        $cadastro->nome = $request->nome;
        $cadastro->telefone = $request->telefone;
        $cadastro->endereco = $request->endereco;
        $cadastro->cidade = $request->cidade;
        $cadastro->estado = $request->estado;
        $cadastro->cep = $request->cep;

        $cadastro->save();
        

        return redirect('/')->with('msg', 'Cadastro criado com sucesso');
    }

    public function listar(){
        $cadastro = Cadastro::all();

        return view('listar', ['cadastro' => $cadastro]);
    }

    public function destroy($id){
        Cadastro::findOrFail($id)->delete();

        return redirect('/listar')->with('msg', 'Registro excluido com sucesso');
    }

    public function edit($id){
        $cadastro = Cadastro::findOrFail($id);

        return view('edit', ['cadastro' => $cadastro]);
    }

    public function update(Request $request){
        $data = $request->all();

        Cadastro::findOrFail($request->id)->update($data);

        return redirect('/listar')->with('msg', 'O registro foi editado com sucesso');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Log;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto){
       
        $this -> produto = $produto;   
    }
    public function home(){
        return 'implementar a home';
    }

    public function index(Produto $produto){
       $produtos =  $this -> produto -> all();
       Log::info('teste');
       return view('listProduto', compact('produtos'));  
    }


    public function cadastro(){
        return view('cadastroProduto');
    }

    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;
        $produto->save();
        return redirect()->route('produtos.index')->with('message', 'Produto criado com sucesso!');
    }

    public function edit($id) {
        $produto = $this -> produto -> find($id);
        return view('edicaoProduto', compact('produto'));
    }

    public function update(Request $request, $id) {
        $produto = $this -> produto -> find($id); 
        $produto-> nome = $request->nome;
        $produto-> descricao = $request->descricao;
        $produto-> quantidade = $request->quantidade;
        $produto-> preco = $request-> preco;
        $produto->save();
        return redirect()->route('produtos.index')->with('message', 'Produto alterado com sucesso!');
    }

    public function destroy($id) {
        $produto = $this -> produto -> find($id);
        $produto -> delete();
        return redirect()->route('produtos.index')->with('message', 'Produto excluído com sucesso!');
    }

}
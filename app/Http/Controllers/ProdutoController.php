<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    public function index() {
        return view('index');
    }

    public function produtos() {
        $resultados = Produtos::get();
        return view('produtos')->with('resultados', $resultados);
    }

    public function create() {
        return view('formulario');
    }


    public function store(Request $req) {
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,gif|max:2048',
        ]);
        

        $imageName = time().'.'.$req->image->getClientOriginalExtension();
        
        $req->image->storeAs('public/images', $imageName);
        
        $titulo = strval($req->titulo);
        $preco = floatval($req->preco);
        $desc = strval($req->desc);
        $tipo = boolval($req->tipo);
    
        $produto = new Produtos();
        $produto->titulo = $titulo;
        $produto->preco = $preco;
        $produto->desc = $desc;
        $produto->tipo = $tipo;
        $produto->imageName = $imageName;
        $produto->save();
    
        return redirect('/produtos');
    }

    public function delete(Request $req) {
        $id = $req->id;
        $produto = Produtos::find($id);
        $produto->delete();

        return redirect("/produtos");
    }

}
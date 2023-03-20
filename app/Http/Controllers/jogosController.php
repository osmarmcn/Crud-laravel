<?php

namespace App\Http\Controllers;

use App\Models\jogo;
use Illuminate\Http\Request;

class jogosController extends Controller
{
   public function index(){
    //dd('olá mundo!');


    $Jogos = Jogo::all();
    //dd($Jogos);
    return view('jogos.index', ['Jogos' => $Jogos]);

   }

   public function create(){
    return view('jogos.create');
   }

   public function store(Request $request){
    //dd($request);
    Jogo::create($request->all());
    return redirect()->route('jogos-index');

   }

   public function editar($id){
        $jogos = jogo::where('id', $id )->first();
        if(!empty($jogos)){
             // dd($jogos);
             return view('jogos.editar',['jogos'=>$jogos]);

        }else{
            return redirect()->route('jogos-index');
        }


   }


}

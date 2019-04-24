<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function input(){
      return view('input');
    }

    public function proses(Request $request){
      $this->validate($request,[
        'id'=>'required|numeric',
        'judul'=>'required',
        'penerbit'=>'required',
        'tahun_terbit'=>'required|numeric',
        'pengarang'=>'required',
      ]);
      return view('proses',['data'=>$request]);
    }
}

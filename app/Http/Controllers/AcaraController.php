<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index(){
        $acara = Acara::all();
        return view('table',compact(['acara']));
    }

    public function create(){
        return view('add');
    }

    public function store(Request $request){
        $acara = Acara::create([
            'nama'=>$request->input('nama'),
            'tema'=>$request->input('tema'),
            'tanggal'=>$request->input('tanggal'),
            'lokasi'=>$request->input('lokasi')
        ]);
        return redirect('table');
    }

    public function edit($id){
        $acara = Acara::find($id);
        return view('update.edit',compact(['acara']));
    }

    public function update($id, Request $request){
        $acara = Acara::find($id);
        $acara->update($request -> all());
        
        return redirect('table');
    }

    public function destroy($id){
        $acara = Acara::find($id);
        $acara ->delete();
        return redirect('table');
    }

}

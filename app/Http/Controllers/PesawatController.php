<?php

namespace App\Http\Controllers;

use App\Models\pesawat;
use Illuminate\Http\Request;


class PesawatController extends Controller
{
    public function index(){

        $data = Pesawat::all();
        return view('datapesawat',compact('data'));
    }
    public function tambahdata(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
       
        Pesawat::create($request->all());
        return redirect()->route('pesawat');
    }

    public function tampilkandata($id){

        $data = Pesawat::find($id);
        //dd($data);

        return view('tampildata', compact('data'));      
    }
    public function updatedata(Request $request, $id){

        $data = Pesawat::find($id);
        $data->update($request->all());
        return redirect()->route('pesawat');
    }
    public function delete(Request $request, $id){
        $data = Pesawat::find($id);
        $data->delete();
        return redirect()->route('pesawat');

    }
} 
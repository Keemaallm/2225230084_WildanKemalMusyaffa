<?php

namespace App\Http\Controllers;

use App\Models\Namadosen;
use Illuminate\Http\Request;

class NamadosenController extends Controller
{
    public function index(){

        $data = Namadosen::all();
        return view('datadosen', compact('data'));
    }

    public function tambahdosen(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        Namadosen::create($request->all());
        return redirect()->route('namadosen')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id){


        $data = Namadosen::find($id);
        // dd($data);

        return view('tampildosen', compact('data'));
    }

    public function updatedata(Request $request, $id){

        $data = Namadosen::find($id);
        $data->update($request->all());
        return redirect()->route('namadosen')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id){

        $data = Namadosen::find($id);
        $data->delete();
        return redirect()->route('namadosen')->with('success', 'Data Berhasil Dihapus');
    }



}

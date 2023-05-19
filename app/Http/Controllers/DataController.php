<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function create(Request $request){
        $data = Data::create($request->all());
        if ($request->hasFile('foto_tersangka')) {
            $request->file('foto_tersangka')->move('foto tersangka/', $request->file('foto_tersangka')->getClientOriginalName());
            $data->foto_tersangka = $request->file('foto_tersangka')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tampildata');
    }

    public function tampildata(){
        $data = Data::all();
        return view('tampildata', compact('data'));
    }

    public function delete($id){
        $data = Data::find($id);
        $data->delete();
        return redirect()->route('tampildata');
    }

    public function tampildataupdate($id){
        $data = Data::find($id);
        return view('tampildataupdate',compact('data')); 
    }

    public function update(Request $request, $id){
        $data = Data::find($id);
        $data->update($request->all());
        return redirect()->route('tampildata');
    }
}

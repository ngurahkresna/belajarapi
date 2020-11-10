<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;

class DesignerController extends Controller
{
    //
public function index(){
	return Designer::all();
}

public function create(request $request){
  $designer = new Designer;
  $designer->nama = $request->nama;
  $designer->expertise = $request->expertise;
  $designer->save();
  
  return "Data Berhasil Masuk";
}

public function update(request $request, $id){
  $nama = $request->nama;
  $expertise = $request->expertise;

  $designer = Designer::find($id);
  $designer->nama = $nama;
  $designer->expertise = $expertise;
  $designer->save();
  
  return "Data Berhasil di Update";
}

public function delete($id){
  $designer =  Designer::find($id);
  $designer->delete();
  
  return "Data Berhasil di Hapus";
}
}



?>
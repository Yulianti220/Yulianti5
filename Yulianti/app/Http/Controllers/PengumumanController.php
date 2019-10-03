<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    public function index(){
    	//Eloquent 
    	$listPengumuman=Pengumuman::all();  //select * from kategori_artikel

    	//blade
    	return view('pengumuman.index',compact('listPengumuman'));
    	//return view( view: 'kategori_artikel.index')->with('"data',$listKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); // select * from kategori_artikel where id=$id limit I
    	$Pengumuman=Pengumuman::find($id);

    	return view('pengumuman.show',compact('Pengumuman'));
    }
}

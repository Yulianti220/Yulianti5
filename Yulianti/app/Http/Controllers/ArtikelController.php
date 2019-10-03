<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function index(){
    	//Eloquent 
    	$listArtikel=Artikel::all();  //select * from kategori_artikel

    	//blade
    	return view('artikel.index',compact('listArtikel'));
    	//return view( view: 'kategori_artikel.index')->with('"data',$listKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); // select * from kategori_artikel where id=$id limit I
    	$Artikel=Artikel::find($id);

    	return view('artikel.show',compact('Artikel'));
    }
}

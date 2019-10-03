<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function index(){
    	//Eloquent 
    	$listGaleri=Galeri::all();  //select * from kategori_artikel

    	//blade
    	return view('galeri.index',compact('listGaleri'));
    	//return view( view: 'kategori_artikel.index')->with('"data',$listKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); // select * from kategori_artikel where id=$id limit I
    	$Galeri=Galeri::find($id);

    	return view('galeri.show',compact('Galeri'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class TestController extends Controller
{
	public function input ()

    {
    	return view ('form');
    }

    public function inputprocess(Request $request)
    {
    	$buku = new Buku([
    		'judul' => $request ->get('judul'),
    		'penerbit' => $request ->get('penerbit'),
    		'tahun_terbit' => $request ->get('tahun_terbit'),
    		'pengarang' => $request ->get('pengarang')


    	]);
    	$buku->save();

    	return redirect('view');
    }

    public function index()
    {
        $buku=\App\Buku::all();
        return view('view', compact('buku'));
    }

    public function edit()
    {
    	$buku = \App\Buku::all();
    	return view('edit', compact('buku'));
    }
    public function update(Request $request, $id)
    {
    	$buku= \App\Buku::find($id);
    	$buku->judul=$request->get('judul');
    	$buku->penerbit=$request->get('penerbit');
    	$buku->tahun_terbit=$request->get('tahun_terbit');
    	$buku->pengarang=$request->get('pengarang');
    	$buku->save();
    	return redirect('view');    	
    }
    public function view()
  {
    $buku = Buku::all();
    return view('view', compact('buku'));
  }
  public function destroy($id)
  {
  	Buku::find($id)->delete();
  	return redirect('view');
  }
}

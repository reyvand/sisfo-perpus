<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index() {
        $db = new Buku;
        $buku = $db::all();
    	return view('buku.list')->with('buku',$buku);
    }
    public function add(Request $request) {
        
    }
}

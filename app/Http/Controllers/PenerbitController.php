<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penerbit;
use Validator;

class PenerbitController extends Controller
{
    public function index() {
      $db = new Penerbit;
      $penerbit = $db::all();
    	return view('penerbit.list')->with('penerbit',$penerbit);
    }
    public function add(Request $request) {
      $message = array('required' => ':attribute tidak boleh kosong',
    									 'nama.alpha_num' => 'Nama Penerbit hanya boleh mengandung huruf dan angka',
    									 'kota.alpha' => 'Nama kota tidak boleh mengandung angka / karakter khusus');

    	$rules = array('nama' => 'required|max:20|alpha_num',
    								 'kota' => 'required|max:20|alpha');
    	
      $validator = Validator::make($request->post(), $rules, $message);
      if($validator->fails()) {
        return redirect('/penerbit/add')->with('error',$validator->errors()->first());
      } else {
        $db = new Penerbit;
        $db->penerbit_nama = $request->nama;
        $db->penerbit_kota = $request->kota;
        $db->save();
        $success = "Data Penerbit berhasil ditambahkan";
    	  return redirect('/penerbit/add')->with('success',$success);
      }
    }
}

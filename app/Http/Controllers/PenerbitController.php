<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penerbit;

class PenerbitController extends Controller
{
    public function index() {
    	return view('penerbit.list');
    }
}

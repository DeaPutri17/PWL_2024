<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{public function index(){
    return 'Selamat Datang';
}

public function about(){
    return 'Dea Putri Nastiti <br>2241720117';
}

public function articles($articel){
    return 'Halaman Artikel dengan Id '.$articel;
}
    //
}

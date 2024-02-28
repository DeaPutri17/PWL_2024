<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{public function articles($articel){
    return 'Halaman Artikel dengan Id '.$articel;
}
    //
}

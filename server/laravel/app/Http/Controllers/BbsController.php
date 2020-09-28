<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    // Indexページの表示
    public function index() {
        return view('bbs.index');
    }

}
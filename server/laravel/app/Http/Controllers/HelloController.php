<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index ()
    {
        $company_name = 'FIELD';
        $blanch_country = ['japan', 'vetnum', 'china','srialnka','indonesia'];

        return view('index', compact('company_name', 'blanch_country'));
    }
}
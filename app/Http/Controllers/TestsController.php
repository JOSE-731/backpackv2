<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    
    public function index(){

      

        return view('pages.test');

    }

    

}

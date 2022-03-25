<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    
    public function index(){


        return view('pages.test');

    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $request)
    {
        
        Tests::create([
            'titulo' => $request->titulo,
            'texto' => $request->texto,
        ]);

        return back();
    }

   /* public function edit($id)
    {
        $edit = Tests::find($id);
        return view('tests.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $edit = Tests::find($id);
        $edit->titulo = $request->titulo;
        $edit->texto = $request->texto;

        $edit->save();
   
        return view('pages.test');
    }*/


    public function destroy(Request $request){

        $tests = Tests::destroy($request->id);

        return back();
    }


    

}

<?php

namespace App\Http\Controllers;

use App\Intro;
use Illuminate\Http\Request;

use App\Http\Requests;

class introsController extends Controller
{
    public function index() {
        $intros = \App\Intro::all();
        return view('intros/overview', compact('intros'));
    }

    public function destroy($id) {

        $object = Intro::find($id);
        $object->delete();

        return redirect()->action('introsController@index');
    }

    public function show($id) {

        $intros = \App\Intro::all()->find($id);

        return view('intros/details', compact('intros'));

    }

    public function create() {
        return view('intros/create');
    }

    public function store(Request $request) {
        $intros = new \App\Intro();
        $intros->name    = $request->name;
        $intros->message = $request->message;

        $intros->save();
        return redirect()->action('introsController@index');
    }

    public function edit($id) {
        $intros = \App\Intro::all()->find($id);
        return view('intros/edit', compact('intros'));
    }

    public function update(Request $request, $id) {

        $intros = \App\Intro::find($id);
        $intros->name = $request->name;
        $intros->message = $request->message;

        $intros->update();
        return redirect()->action('introsController@edit', $intros->id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Outro;
use Illuminate\Http\Request;

use App\Http\Requests;

class outrosController extends Controller
{
    public function index() {
        $outros = \App\Outro::all();
        return view('outros/overview', compact('outros'));
    }

    public function destroy($id) {

        $object = Outro::findorFail($id);
        $object->delete();

        return redirect()->action('outrosController@index');
    }

    public function show($id) {

        $outros = \App\Outro::all()->findOrFail($id);

        return view('outros/details', compact('outros'));

    }

    public function create() {
        return view('outros/create');
    }

    public function store(Request $request) {
        $outros = new \App\Outro();
        $outros->name    = $request->name;
        $outros->message = $request->message;

        $outros->save();
        return redirect()->action('outrosController@index');
    }

    public function edit($id) {
        $outros = \App\Outro::all()->findOrFail($id);
        return view('outros/edit', compact('outros'));
    }

    public function update(Request $request, $id) {

        $outros = \App\Outro::findOrFail($id);
        $outros->name = $request->name;
        $outros->message = $request->message;

        $outros->update();
        return redirect()->action('outrosController@edit', $outros->id);
    }
}

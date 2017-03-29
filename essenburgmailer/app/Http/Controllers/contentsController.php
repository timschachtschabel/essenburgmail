<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

use App\Http\Requests;

class contentsController extends Controller
{
    public function index() {
        $contents = \App\Content::all();
        return view('contents/overview', compact('contents'));
    }
    
    public function destroy($id) {
        
        $object = Content::findorFail($id);
        $object->delete();

        return redirect()->action('contentsController@index');
    }

    public function show($id) {

        $contents = \App\Content::all()->find($id);

        return view('contents/details', compact('contents'));

    }

    public function create() {
        return view('contents/create');
    }

    public function store(Request $request) {
        $content = new \App\Content();
        $content->name    = $request->name;
        $content->message = $request->message;

        $content->save();
        return redirect()->action('contentsController@index');
    }

    public function edit($id) {
        $content = \App\Content::all()->find($id);
        return view('contents/edit', compact('content'));
    }

    public function update(Request $request, $id) {

        $content = \App\Content::find($id);
        $content->name = $request->name;
        $content->message = $request->message;

        $content->update();
        return redirect()->action('contentsController@edit', $content->id);
    }
}

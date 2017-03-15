<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class customersController extends Controller
{

    public function index() {

        /* stap 1:
            select all customers

           stap 2:
             return 'customers/overview'

           stap 3:
            give data from "stap 1" to the view
        */

        $customers = \App\Customer::active();
        return view('customers/overview', compact('customers'));
    }

    public function show($id) {

        /* stap 1:
            select customer with $id

           stap 2:
             return 'customers/detail'

           stap 3:
            give data from "stap 1" to the view
        */

        $customer = \App\Customer::active()->find($id);

        return view('customers/details', compact('customer'));

    }

    public function create() {

        return view('customers/create');

    }

    public function store(Request $request) {
        $customer = new \App\Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phonenumber = $request->phonenumber;

        $customer->save();
        return redirect()->action('customersController@index');
    }

    public function destroy($id) {
        Customer::destroy($id);
        return redirect()->action('customersController@index');
    }

    public function suspend($id) {
        $customer = \App\Customer::active()->find($id);
        $customer->isActive = 0;
        $customer->update();
        return redirect()->action('customersController@index');
    }

    public function edit($id) {
        $customer = \App\Customer::active()->find($id);
        return view('customers/edit', compact('customer'));
    }

    public function update(Request $request, $id) {

        $customer = \App\Customer::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phonenumber = $request->phonenumber;

        $customer->update();
        return redirect()->action('customersController@edit', $customer->id);
    }

}
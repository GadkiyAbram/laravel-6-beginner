<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store()
    {
        //Option 1
//        \App\Customer::create(request()->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//        ]));

        //Option 2
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        \App\Customer::create($data);

//        return redirect()->back();        //to /customers/create
        return redirect('customers');
    }

    public function show(Customer $customer)   //$customer should match the name in the route
    {
        //Option 1
//        $customer = Customer::findOrFail($customerId);

        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $customer->update($data);

        return redirect('/customers');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('/customers');
    }
}

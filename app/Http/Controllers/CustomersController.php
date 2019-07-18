<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customerList = Customer::all();
        return view('customers.index', compact('customerList'));
    }

    public function create()
    {
        $companyList = Company::all();
        $customer = new Customer();
        return view('customers.create', compact('customer', 'companyList'));
    }

    public function store()
    {
        $c = Customer::create($this->validateRequest());
        $c->save();
        return redirect('/customers/'.$c->id);
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }
    public function edit(Customer $customer)
    {
        $companyList = Company::all();
        return view('customers.edit', compact('customer', 'companyList'));
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validateRequest($customer->id));
        return redirect('/customers/'.$customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customers');
    }

    public function validateRequest($id = null)
    {
        $idFlag = $id ? ','.$id : '';
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:customers,email'.$idFlag,
            'active' => 'required|boolean',
            'company_id' => 'required|integer|exists:companies,id',
        ]);
    }
}

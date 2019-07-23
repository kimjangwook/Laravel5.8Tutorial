<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\Events\NewCustomerHasRegistered;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        $customer = Customer::create($this->validateRequest());
        $this->storeImage($customer);
        event(new NewCustomerHasRegistered($customer));
        return redirect(route('customers.show', ['customer' => $customer]));
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
        $this->storeImage($customer);
        return redirect(route('customers.show', ['customer' => $customer]));
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect(route('customers.index'));
    }

    public function validateRequest($id = null)
    {
        $idFlag = $id ? ','.$id : '';
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:customers,email'.$idFlag,
            'active' => 'required|boolean',
            'company_id' => 'required|integer|exists:companies,id',
            'image' => 'sometimes|file|image|max:5120',
        ]);
    }

    private function storeImage($customer)
    {
        if (request()->has('image')) {
            $customer->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage'.DIRECTORY_SEPARATOR.$customer->image))
                ->fit(300)
                ->crop(100, 200)
                ->save();
        }
    }
}

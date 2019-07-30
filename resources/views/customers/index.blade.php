@extends('layouts.app')
@section('content')
    <h1>顧客一覧</h1>
    @can('create', \App\Customer::class)
        <a href="{{ route('customers.create') }}" class="btn btn-dark">顧客追加</a>
    @endcan
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Company</th>
            <th scope="col">Phone</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customerList as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->active }}</td>
            <td>{{ $customer->company->name }}</td>
            <td>{{ $customer->company->phone }}</td>
            <td>
                @can('view', $customer)
                    <a href="{{ route('customers.show', ['customer' => $customer]) }}" class="btn btn-secondary">Show</a>
                @endcan
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center pt-3">{{ $customerList->links() }}</div>
@endsection

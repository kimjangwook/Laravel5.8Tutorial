@extends('layouts.app')
@section('content')
    <h1>顧客一覧</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-dark">顧客追加</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Company</th>
            <th scope="col">Phone</th>
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
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center pt-3">{{ $customerList->links() }}</div>
@endsection

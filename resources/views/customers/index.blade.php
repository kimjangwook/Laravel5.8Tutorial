@extends('layouts.app')
@section('content')
    <h1>顧客一覧</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-dark">顧客追加</a>
    <ul>
        @foreach ($customerList as $customer)
            <li class="py-3">
                <a href="{{ route('customers.show', ['customer' => $customer]) }}">
                    お名前: {{ $customer->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection

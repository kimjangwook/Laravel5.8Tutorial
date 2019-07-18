@extends('layouts.default')
@section('content')
    <h1>고객 리스트</h1>
    <a href="/customers/create" class="btn btn-dark">고객 추가</a>
    <ul>
        @foreach ($customerList as $customer)
            <li class="py-3">
                <a href="/customers/ {{ $customer->id }}">
                    이름: {{ $customer->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection

@extends('layouts.default')
@section('content')
    <h1>고객 정보 수정</h1>

    <form action="/customers/{{ $customer->id }}" method="POST">
        @method('PUT')
        @include('customers.form')
        <button type="submit" class="btn btn-primary">수정</button>
        <a href="/customers/{{ $customer->id }}" class="btn btn-link">취소</a>
    </form>
@endsection

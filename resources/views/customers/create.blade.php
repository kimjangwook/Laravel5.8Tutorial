@extends('layouts.default')
@section('content')
    <h1>고객 등록</h1>

    <form action="/customers" method="POST">
        @include('customers.form')
        <button type="submit" class="btn btn-primary">등록</button>
        <a href="/customers" class="btn btn-link">취소</a>
    </form>
@endsection

@extends('layouts.default')
@section('content')
    <h1>顧客情報修正</h1>

    <form action="/customers/{{ $customer->id }}" method="POST">
        @method('PUT')
        @include('customers.form')
        <button type="submit" class="btn btn-primary">修正</button>
        <a href="/customers/{{ $customer->id }}" class="btn btn-link">キャンセル</a>
    </form>
@endsection

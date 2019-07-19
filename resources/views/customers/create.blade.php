@extends('layouts.default')
@section('content')
    <h1>顧客追加</h1>

    <form action="/customers" method="POST">
        @include('customers.form')
        <button type="submit" class="btn btn-primary">登録</button>
        <a href="/customers" class="btn btn-link">キャンセル</a>
    </form>
@endsection

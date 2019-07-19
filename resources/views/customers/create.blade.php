@extends('layouts.app')
@section('content')
    <h1>顧客追加</h1>

    <form action="{{ route('customers.store') }}" method="POST">
        @include('customers.form')
        <button type="submit" class="btn btn-primary">登録</button>
        <a href="{{ route('customers.index') }}" class="btn btn-link">キャンセル</a>
    </form>
@endsection

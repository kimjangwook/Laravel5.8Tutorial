@extends('layouts.app')
@section('content')
    <h1>顧客情報修正</h1>

    <form action="{{ route('customers.update', ['customer' => $customer]) }}" method="POST">
        @method('PUT')
        @include('customers.form')
        <button type="submit" class="btn btn-primary">修正</button>
        <a href="{{ route('customers.show', ['customer' => $customer]) }}" class="btn btn-link">キャンセル</a>
    </form>
@endsection

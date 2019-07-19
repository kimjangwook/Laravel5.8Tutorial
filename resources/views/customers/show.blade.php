@extends('layouts.default')
@section('content')
    <h1>顧客情報</h1>

    <div class="form-group">
        お名前: {{ $customer->name }}
    </div>
    <div class="form-group">
        メールアドレス: {{ $customer->email }}
    </div>
    <div class="form-group">
        ステータス: {{ $customer->active }}
    </div>
    <div class="form-group">
        会社名: {{ $customer->company->name }}
    </div>
    <div class="form-group">
        会社電話番号: {{ $customer->company->phone }}
    </div>

    <form action="/customers/{{ $customer->id }}" method="POST">
        <a href="/customers/{{ $customer->id }}/edit" class="btn btn-primary">修正</a>

        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">削除</button>

        <a href="/customers" class="btn btn-link">キャンセル</a>
    </form>

@endsection

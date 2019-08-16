@extends('layouts.app')
@section('content')
    <h1>顧客情報</h1>

    <div class="form-group">
        お名前: {{ $customer->name }}
    </div>
    <div class="form-group">
        メールアドレス: {{ $customer->email }}
    </div>
    <div class="form-group">
        電話番号: {{ $customer->phone->phone ?? '' }}
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
    @if ($customer->image)
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('storage/'.$customer->image) }}" style="width: 100%; height: auto;">
            </div>
        </div>
    </div>
    @endif

    <form action="{{ route('customers.destroy', ['customer' => $customer]) }}" method="POST">
        <a href="{{ route('customers.edit', ['customer' => $customer]) }}" class="btn btn-primary">修正</a>

        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">削除</button>

        <a href="{{ route('customers.index') }}" class="btn btn-link">キャンセル</a>
    </form>

@endsection

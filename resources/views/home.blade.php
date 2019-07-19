@extends('layouts.app')

@section('content')
<h1>ようこそ、Laravel 5.8 チュートリアルページへ</h1>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="card my-5">
    <div class="card-header">ログインステータス</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @auth
            ログイン済
        @endauth

        @guest
            ゲスト
        @endguest
    </div>
</div>
@endsection

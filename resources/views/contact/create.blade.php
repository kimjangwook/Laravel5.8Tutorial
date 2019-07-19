@extends('layouts.app')
@section('content')
    <h1>お問い合わせ</h1>
    <form action="/contact" method="POST">
        @csrf
        <div class="form-group">
            <label for="inputName">お名前</label>
            <input type="text" name="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="お名前を入力してください" value="{{ old('name') }}">
            <div class="text-danger">{{ $errors->first('name') }}</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">メールアドレス</label>
            <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="メールアドレスを入力してください" value="{{ old('email') }}">
            <div class="text-danger">{{ $errors->first('email') }}</div>
        </div>
        <div class="form-group">
            <label for="inputMessage">内容</label>
            <textarea name="message" class="form-control" id="inputMessage" aria-describedby="messageHelp" placeholder="内容を入力してください" cols="30" rows="10">{{ old('email') }}</textarea>
            <div class="text-danger">{{ $errors->first('message') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">お問い合わせ</button>
    </form>
@endsection

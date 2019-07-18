@extends('layouts.default')
@section('content')
    <h1>문의</h1>
    <form action="/contact" method="POST">
        @csrf
        <div class="form-group">
            <label for="inputName">이름</label>
            <input type="text" name="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="이름을 입력하세요" value="{{ old('name') }}">
            <div class="text-danger">{{ $errors->first('name') }}</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">이메일</label>
            <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="이메일을 입력하세요" value="{{ old('email') }}">
            <div class="text-danger">{{ $errors->first('email') }}</div>
        </div>
        <div class="form-group">
            <label for="inputMessage">내용</label>
            <textarea name="message" class="form-control" id="inputMessage" aria-describedby="messageHelp" placeholder="문의사항을 입력하세요" cols="30" rows="10">{{ old('email') }}</textarea>
            <div class="text-danger">{{ $errors->first('message') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">메일 전송</button>
    </form>
@endsection

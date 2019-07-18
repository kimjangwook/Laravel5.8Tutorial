@extends('layouts.default')
@section('content')
    <h1>고객 정보</h1>

    <div class="form-group">
        이름: {{ $customer->name }}
    </div>
    <div class="form-group">
        이메일: {{ $customer->email }}
    </div>
    <div class="form-group">
        상태: {{ $customer->active }}
    </div>
    <div class="form-group">
        회사명: {{ $customer->company->name }}
    </div>
    <div class="form-group">
        회사번호: {{ $customer->company->phone }}
    </div>

    <form action="/customers/{{ $customer->id }}" method="POST">
        <a href="/customers/{{ $customer->id }}/edit" class="btn btn-primary">수정</a>

        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">삭제</button>

        <a href="/customers" class="btn btn-link">뒤로</a>
    </form>

@endsection

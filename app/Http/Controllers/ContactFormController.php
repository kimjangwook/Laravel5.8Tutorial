<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // 이메일 전송 작업 필요
        $to = 'test@test.com';
        Mail::to($to)->send(new ContactFormMail($data));

//        session()->flash('success', '문의하신 내용을 검토 후, 등록하신 메일 주소로 답변 드리도록하겠습니다.');
        return redirect(route('contact.create'))->with('success', '문의하신 내용을 검토 후, 등록하신 메일 주소로 답변 드리도록하겠습니다.');
    }
}

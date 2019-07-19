<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiController extends Controller
{
    public function index()
    {
        return [
            'is_test' => true,
            'author' => 'Jangwook Kim',
            'company' => 'Connecty',
            'name_of_system' => 'Connecty AWS Management System',
        ];
    }
}

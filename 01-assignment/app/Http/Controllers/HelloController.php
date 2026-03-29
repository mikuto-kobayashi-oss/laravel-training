<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $name = "小林 海空斗";
        $university = "立命館大学";

        return view('hello', [
            'users_name' => $name,
            'users_university' => $university,
        ]);
    }
}

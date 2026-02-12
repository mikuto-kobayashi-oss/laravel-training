<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', []);
    }
    
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = DB::table('users')
            ->where('email', $email)
            ->first();

        if (!$user) {
            return back()->with('error', 'ユーザーが存在しません');
        }

        if ($password !== $user->password) {
            return back()->with('error', 'パスワードが違います');
        }

        session(['user_id' => $user->id]);
        session(['name' => $user->name]);

        return redirect('/office')->with('success', 'ログインしました');
    }
}

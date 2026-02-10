<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Office;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }
    public function store(StorePostRequest $request)
{
    if ($request->expectsJson()) {
        return response()->json(['message' => '登録しました']);
    }
     Office::create($request->validated());
     return redirect('/post/create')->with('success', '登録完了');
}
}

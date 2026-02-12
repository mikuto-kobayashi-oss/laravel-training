<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Office;
use App\Http\Requests\UpdateOfficeRequest;
use Illuminate\Support\Facades\DB;

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

    public function edit(Office $office)
    {
        return view('post.create', compact('office'));
    }

    public function update(UpdateOfficeRequest $request, Office $office)
    {
        DB::transaction(function () use ($request, $office) {
            $office->update($request->validated());
        });

        return redirect('/office')->with('success', '更新しました');
    }
    
    public function delete(Office $office)
    {
        DB::transaction(function () use ($office) {
            $office->update(['del_flg' => 1]);
        });

        return redirect('/office')->with('success', '削除しました');
    }
}

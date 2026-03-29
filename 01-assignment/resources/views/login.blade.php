<!DOCTYPE html>
<h1>ログインページ</h1>
<form action="{{ route('login') }}" method="post">
    @csrf
<div>
    <label>
        メールアドレス：
        <input type="text" name="email" required>
    </label>
</div>
<div>
    <label>
        パスワード：
        <input type="password" name="password" required>
    </label>
</div>
<input type="submit" value="ログイン">
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
</form>
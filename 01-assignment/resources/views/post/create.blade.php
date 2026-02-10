<!DOCTYPE html>
<html>
    <body>
        <h1>物件登録</h1>
        <form action="{{ url('/post') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="施設名">
            <input type="text" name="address" placeholder="ビル名">
            <input type="text" name="post_code" placeholder="郵便番号">
            <input type="text" name="stair" placeholder="階数">
            <input type="text" name="comment" placeholder="コメント">
            <input type="submit" value="登録">
        </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-danger">
        <ul>
            <li>{{ session('success') }}</li>
        </ul>
    </div>
    @endif
    </body>
</html>

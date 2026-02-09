<!DOCTYPE html>
<html>
<body>
    @foreach ($ofices as $ofice)
        <p>施設名：{{ $ofice->name }}</p>
        <p>ビル名：{{ $ofice->address }}</p>
        <p>郵便番号：{{ $ofice->post_code }}</p>
        <p>階数：{{ $ofice->stair }}</p>
        <p>コメント：{{ $ofice->comment }}</p>
    @endforeach
    </body> 
</html>
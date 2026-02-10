<!DOCTYPE html>
<html>
<body>
    @foreach ($offices as $office)
        <p>施設名：{{ $office->name }}</p>
        <p>ビル名：{{ $office->address }}</p>
        <p>郵便番号：{{ $office->post_code }}</p>
        <p>階数：{{ $office->stair }}</p>
        <p>コメント：{{ $office->comment }}</p>
    @endforeach
    </body> 
</html>
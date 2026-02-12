<!DOCTYPE html>
<html>
<body>

<table border="1" cellpadding="12" cellspacing="0">
  <thead>
    <tr>
      <th>施設名</th>
      <th>ビル名</th>
      <th>郵便番号</th>
      <th>階数</th>
      <th>コメント</th>
      <th>メモ</th>
    </tr>
  </thead>
  
  <tbody>
    @foreach ($offices as $office)
      <tr>
        <td>{{ $office->name }}</td>
        <td>{{ $office->address }}</td>
        <td>{{ $office->post_code }}</td>
        <td>{{ $office->stair }}</td>
        <td>{{ $office->comment }}</td>
        <td>
            @foreach ($office->memos as $memo)
                {{ $memo->text }}<br>
            @endforeach
        </td>
        <td>
        <button type="button" onclick="location.href='{{ route('post.edit', $office->id) }}'">
            更新
        </button>
        <form action="{{ route('post.delete', $office->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<button type="button" onclick="location.href='{{ url('/post/create') }}'">新規登録</button>

@if (session('success'))
<div class="alert alert-danger">
    <ul>
        <li>{{ session('success') }}</li>
    </ul>
</div>
@endif
</body>
</html>

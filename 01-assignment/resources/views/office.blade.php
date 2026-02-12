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
      </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>

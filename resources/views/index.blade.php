<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h2>Todo List</h2>
  <form action="/todo/create" method="POST">
  @csrf
  <input type="text" name="content">
  <input type="submit" value="追加">
  </form>
  <table>
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>
        {{$item->created_at}}
      </td>
      <td>
      <input type="text" name="content" value="{{$item->content}}">
      </td>
      <td>
      <form action="todo/update/{{$item->id}}" method="post">
        @csrf
      <input type="text" name="content" value="{{$item->content}}">
      <input type="submit" value="更新">
      </from>
      </td>
      <td>
      <form action="todo/delete/{{ $item->id }}" method="post">
        @csrf
     
      <input type="submit" value="削除">
      </form>    
      </td>
    </tr>
    @endforeach
</body>

</html>
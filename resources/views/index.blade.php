<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>COACHTECH</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gorditas&display=swap" rel="stylesheet">
<style>
  
  body {
      font-size:18px;
      margin: 5px;
      background-color:#193278;
  }
  section {
      position: absolute;
      background-color: white;
      width: 1000px;
      height: 300px;
      top: 300px;
      left: 450px;
      z-index: 1;
      border-radius: 10px;
    }
      
      
  .title {
      font-size: 24px;
      color:black;
      font-weight: bold;
      margin: 25px 0 8PX 30px;
  }
  .create {
    padding: 0;
    height: 35px;
    margin-left: 30px;
    border: solid 2px #dddddd;
    border-radius: 5px;
  }
  table {
    width: 980px;
    margin-top: 20px;
  }
  th {
    padding-bottom: 20px;
  }
  .task-update {
    width:50px;
  }
  .task-name {
    width: 389px;
  }
  td {
    text-align: center;
  }
  .card-row2 {
    height: 30px;
  }
  .created-task {
    height: 20px;
    border: solid 2px #dddddd;
    border-radius: 5px;
  }
  .created {
    font-size: 15px;
  }
  .button-add {
    height: 35px;
    font-weight: bold;
    margin-left: 110px;
    color: pink;
     background-color:white;
     border: solid 2px pink;
     border-radius: 5px;
     padding: 0 15px;
  }
  .button-update {
    height: 35px;
    font-weight: bold;
    
    color: orange;
    background-color:white;
    border: solid 2px orange;
    border-radius: 5px;
    padding: 0 15px;
  }
  .button-delete {
    height: 35px;
    font-weight: bold;
    
        
    color:  #7acbe1;
    background-color:white;
    border: solid 2px #7acbe1;
    border-radius: 5px;
    padding: 0 15px;
  }

    </style>

</head>

<body>
  <section calss=""> 
    <h2 class="title">Todo List</h2>  
     @foreach ($errors->all() as $error)
     <li>
    {{$error}}
      </li>
    @endforeach
     
  <form action="/todo/create" method="POST">
  @csrf
  <input type="text" class="create" size="105" name="content">
  <input type="submit" class="button-add" value="追加">
  </form>
  <table>
    <tr class="todo__cart">
      <th class="create-date">作成日</th>
      <th class="task-name">タスク名</th>
      <th class="task-update">更新</th>
      <th class="task-delete">削除</th>
    </tr>
    @foreach ($items as $item)
    <tr class="card-row2">
      <td class="created">
        {{$item->created_at}}
      </td>    
      <td class="updated">
        <form class="updated-form" action="todo/update/{{$item->id}}" method="post">
          @csrf
          <input type="text" size="40" class="created-task" name="content" value="{{$item->content}}">
      </td>
      <td>
          <input type="submit" class="button-update" value="更新">
      </td>
        </form>
      </td>
      <td class="deleted">
        <form action="todo/delete/{{ $item->id }}" method="post">
          @csrf
          <input type="submit" class="button-delete" value="削除">
        </form>    
      </td>
    </tr>
    @endforeach
  </table>
</section>
</body>

</html>
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/register" method="POST">
    @csrf
    <table>
      <tr>
        <th>名前</th>
        <td><input type="text" name="name"></td>
      </tr>
       @error('email')
      <tr>
       <td>{{$message}}</td>
      </tr>
      @enderror  
      <tr>
        <th>メールアドレス</th>
        <td><input type="mail" name="email"></td> 
      </tr>
      <tr>  
        <th>パスワード</th>
        <td><input type="password" name="password"></td>
      </tr>
        @error('password')
      <tr>  
        <td>{{$message}}</td>
      </tr>  
        @enderror  
        <th>確認用パスワード</th>
        <td><input type="password" name="password_confirmation"></td>
      </tr>
      <tr>    
        <td><input type="submit" value="会員登録"></td>
      </tr>
    </table>
  </form>
  
</body>
</html>
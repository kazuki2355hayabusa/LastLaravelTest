<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  .container{
    position:relative;
    background-color:#c4ced357;
    height: 75vh;
    width: 100vw;
  }
  .card{
    position:absolute;
    width: 300px;
    top: 32%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .login{
    width:300px;
  }
  .login_t{
    width:330px;
  }
  tr{
    width:300px
  }
  .input{
    margin: 7px;
    width: 90%;
    height: 25px;
    border: 1px solid #B299FF;
    background-color:#c4ced357;
    border-radius: 5px;
    font-size:11px

  }
  .button{
    width: 92%;
    height: 35px;
    margin: 7px;
    background-color:blue;
    color:white;
    border:none;
    border-radius: 5px;
  }
  p{
    text-align:center;
    color:#B299FF;
    font-size:11px
  }
  .header{
    background-color:white;
    height:80px;
    position:relative;
  }
  .fooder{
    position:relative;
    text-align:center;
    font-weight: bold;
    height:40px;
    
    
  }
  .fooder_c{
    position:absolute;
    text-align:center;
    top:50%;
  }
  h2{
    background-color:white;
    position:absolute;
    top: 8%;
    left:35px;
  }
  </style>
  <title>Document</title>
</head>

<body>
<div class="header">
    <h2>Atte</h2>
</div>   
<div class="container">
  
   <div class="card">
 
  <form action="/login" method="POST" class="login">
    @csrf
    
      <table class="login_t">
        <tr>
          <th>ログイン</th>
        </tr> 
        <tr>
          <td><input type="mail" name="email" placeholder="メールアドレス" class="input"></td> 
        </tr>
        <tr>
          <td><input type="password" name="password" placeholder=パスワード class="input"></td>
        </tr>  
          <td><input type="submit" value="ログイン" class="button"></td>
        </tr>
      </table>
  </form>
  <p>アカウントをお持ちでない方はこちら</p>
  <p><a href="/register">会員登録</a></p>
  </div>
</div>
<div class="fooder">
    <small class="fooder_c">Atte,inc.</small>
</div> 
</body>
</html>
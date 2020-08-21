<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>QR-Order</title>
    <script type="text/javascript" src="admin.js"></script>
  </head>
  <body>
  <form method="get" action="admin.php">
    ID:<input type="text" name="shopname" /><br>
    pass:<input type="text" name="password" /><br>
    <input type="submit" value="送信" />
  </form>
  <?php
    $shopname=$_REQUEST["shopname"];
    $password=$_REQUEST["password"];
    if ($shopname != "" && $password != ""){
      if ($password == "0000"){
        print "ログイン中:{$shopname}";
        print "<div><form method='get' action='admin.php'><ul>";
        for($i=1;$i<10;$i++){
          print "<li>{$i}番テーブル pass:<input type='text' name='table{$i}' /></li>";
        }
        print "</ul><br><input type='submit' value='決定' /></form></div>";
      }else{
        print "パスワードが間違っています";
      }
    }
  ?>
  <a href="https://qr-order.herokuapp.com/">店舗用画面はこちら</a>
  </body>
</html>

<?php
  $shopname=$_REQUEST["shopname"];
  $password=$_REQUEST["password"];
  if ($shopname != "" && $password != ""){
    if ($password == "0000"){
      echo "OK";
    }else{
      echo "パスワードが間違っています";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>QR-Order</title>
    <script type="text/javascript" src="admin.js"></script>
  </head>
  <body>
  <form method="get" action="admin.php">
    店舗ID:<input type="text" name="shopname" /><br>
    パスワード:<input type="text" name="password" /><br>
    <input type="submit" value="送信" />
  </form>
  </body>
</html>

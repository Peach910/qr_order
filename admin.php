<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>QR-Order</title>
    <script type="text/javascript" src="admin.js"></script>
  </head>
  <body>
  <form method="get" action="admin.php">
  <?php
    ID:<input type="text" name="shopname" /><br>
    pass:<input type="text" name="password" /><br>
    <input type="submit" value="送信" />
    $shopname=$_REQUEST["shopname"];
    $password=$_REQUEST["password"];
    if ($shopname != "" && $password != ""){
      if ($password == "0000"){
        print "ログイン中:{$shopname}";
      }else{
        print "パスワードが間違っています";
      }
    }
  ?>
  </form>
  </body>
</html>

<?php
  echo "Hello!!";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>QR-Order</title>
    <script type="text/javascript" src="index.js"></script>
  </head>
  <body>
    <h1>〇〇食堂　〇番テーブル</h1>
    <h3>A定食</h3>
    <select id="numA">
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
    </select>
    <h3>B定食</h3>
    <select id="numB">
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
    </select>
    <h3>C定食</h3>
    <select id="numC">
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
    </select>
    <input type="button" value="追加" onclick="addClick()">
    <h2>カート</h2>
    <h3>A定食　<span id="nowA"></span>個</h3>
    <h3>B定食　<span id="nowB"></span>個</h3>
    <h3>C定食　<span id="nowC"></span>個</h3>
    <input type="submit" value="確定" onclick="OKClick()">
    <?php
      header('Content-type: application/json; charset=utf-8');
      $sumA = filter_input( INPUT_GET, 'sumA' );
      $sumB = filter_input( INPUT_GET, 'sumB' );
      $sumC = filter_input( INPUT_GET, 'sumC' );
    ?>
  </body>
</html>
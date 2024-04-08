<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="text" name="input-1" id="input-1" value="<?=key_exists('input-1', $_POST) ? $_POST['input-1']: ''; ?>">   
    <input type="text" name="input-2" id="input-2" value="<?=key_exists('input-2', $_POST) ? $_POST['input-2']: ''; ?>">
    <input type="submit" value="Wyślij">
  </form>
  <!-- <form action="index.php" method="get">
    <input type="text" name="input-1" id="input-1" value="<?=key_exists('input-1', $_GET) ? $_GET['input-1']: ''; ?>">   
    <input type="text" name="input-2" id="input-2" value="<?=key_exists('input-2', $_GET) ? $_GET['input-2']: ''; ?>">
    <input type="submit" value="Wyślij">
  </form> -->
</body>
</html>
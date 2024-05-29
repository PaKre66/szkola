<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="makefile.php" method="post">
   <div>
      <label for="name_file">Nazwa pliku</label>
      <input type="text" name="name_file" id="name_file"></input>
   </div> 
   <input type="submit" value="zapisz"></input>
   <input type="reset" value="wyczyść"></input>
  </form>
  <form action="index.php"  method="post" >
    <div>
        <label for="name_file">Nazwa pliku</label>
        <input type="text" name="name_file" id="name_file"></input>
    </div> 
    <div>
        <label for="content">Zawartość pliku</label>
        <input type="text" name="content" id="content"></input>
    </div> 
    <input type="submit" value="zapisz"></input>
    <input type="reset" value="wyczyść"></input>
  </form>
  <form action="getfile.php" method="get">
   <div>
      <label for="name_file">Nazwa pliku</label>
      <input type="text" name="name_file" id="name_file"></input>
   </div> 
   <input type="submit" value="zapisz"></input>
   <input type="reset" value="wyczyść"></input>
  </form>

</body>
</html>
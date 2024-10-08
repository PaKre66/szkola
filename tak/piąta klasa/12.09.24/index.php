<?php
require_once('./connect.php');
switch($_GET) {
    case 'update':

        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header>
      <h1>jcjhsdftgsghxc  gh</h1>
  </header>
<main>
    <form action="./upload_files" method="post">
      <div>
           
                <label for="tytuł">Nazwa</label>
         
                <input type="text" name="tytuł" id="tytuł"></input>
           
      </div>
      <div>
            
                <label for="tekst">tekst</label>
        
                <textarea type="text" name="tekst" id="tekst"></textarea>
            
      </div>
      
        <div>
            
                <label for="obraz">obraz</label>
                <input type="hidden">
                <input type="file" name="obraz" id="obraz"></input>
            
        </div>
        <div>
            <input type="submit" value="Zapisz">
            <input type="reset" value="Wyczyść">
        </div>
    </form>
    <article>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
    </article>
    <article>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus distinctio ullam cum.
    </article>
</main> 
  <footer>
    Lorem ipsum dolor sit.
  </footer>
</body>
</html>
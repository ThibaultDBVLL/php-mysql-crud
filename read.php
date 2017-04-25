<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Randonnées</title>
  <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <h1>Liste des randonnées</h1>
  <table>
    <?php
      $pdo=new PDO("mysql:host=localhost;dbname=reunion_island","root", "psycho4577");
      foreach($pdo->query('SELECT name FROM hiking') as $row){
        print($row['name']);
      }
    ?>
  </table>
</body>
</html>

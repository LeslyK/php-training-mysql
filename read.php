<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <?php
        try
    {
      $bdd = new PDO('mysql:host=localhost; dbname=randonnée_réunion; charset=utf8', 'root', 'SimplonERN17');
    }
    catch(Exception $e)
    {
      die('Erreur:' . $e->getMessage());
    }
    ?>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
      <tr>
        <th>name</th>
        <th>difficulty</th>
        <th>distance</th>
        <th>duration</th>
        <th>height_difference</th>        
      </tr>
      <?php
        foreach ($bdd->query('SELECT* FROM hiking') as $value) {
          echo utf8_encode('<tr><td>'.$value["name"].'<td><td>'.$value["difficulty"].'</td><td>'.$value["distance"].'</td><td>'.$value["duration"].'</td><td>'.$value["height_difference"]. '</td><tr>');
        }
      ?>
    </table>
  </body>
</html>

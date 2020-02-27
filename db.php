<?php

define('DB_NAME', 'citation');
define('DB_USER', 'wazly');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('DB_TABLE', 'phrase');


try {
  global $db;
  //echo 'connect db';
  $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : ' . $e->getMessage());
}


$req = $db->query("SELECT * FROM phrase ORDER BY RAND() LIMIT 1");

while ($donnees = $req->fetch()) {
?>
  <p>
    <?php echo $donnees['phrase']; ?>
  </p>
<?php
}

$req->closeCursor();

?>
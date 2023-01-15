<?php
  try {
    $con = new PDO('mysql:host=localhost;dbname=entreprise;charset=utf8' , 'root' , '');
      } catch (Exception $e)
      {
    die('Erreur de connexion.' . $e->getMessage());
}
?>
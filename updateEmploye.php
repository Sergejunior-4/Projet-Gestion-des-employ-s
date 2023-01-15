<?php
    include "connexion.php";

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $salaire = $_POST['salaire'];
    $prime = $_POST['prime'];
    $service = $_POST['service'];
    $num_emp = $_GET['numemp'];

    $sql = "UPDATE employes
            SET empnom = '$nom', 
                emppren = '$prenom',
                empsexe = '$sexe',
                empsalaire = $salaire,
                empprime = $prime,
                srvno = $service
            WHERE empno = $num_emp";

    $reponse = $con->exec($sql);

    if ($reponse) { header('Location:employes.php'); }

?>
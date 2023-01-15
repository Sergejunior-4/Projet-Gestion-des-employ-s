<?php
    include "connexion.php";

    $num_emp = $_GET['empno'];
    $sql = "DELETE FROM employes WHERE empno = $num_emp";
    $rep = $con->exec($sql);

    header('Location:employes.php');
?>
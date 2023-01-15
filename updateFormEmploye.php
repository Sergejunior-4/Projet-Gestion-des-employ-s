<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification des données</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'connexion.php' ?>

<?php
    $num_emp = $_GET['empno'];
    $sql = "SELECT * FROM employes WHERE empno= $num_emp";
    $reponse = $con->query($sql);
    $employe = $reponse->fetch(PDO::FETCH_ASSOC);
?>

<fieldset>
    <legend><h2>Modifier l'employé</h2></legend>
    <form action="updateEmploye.php?numemp=<?= $num_emp ?>" method="post">
        <div>
            <label for="nom">Nom</label>
            <div> <input type="text" name="nom" id="nom" value="<?= $employe['EMPNOM'] ?>"> </div>
        </div>

        <div>
            <label for="prenom">Prénom</label>
            <div> <input type="text" name="prenom" id="prenom" value="<?= $employe['EMPPREN'] ?>"> </div>
        </div>

        <div>
            <label for="dateN">Date de naissance</label>
            <div> <input type="text" name="sexe" id="sexe" value="<?= $employe['EMPSEXE'] ?>"> </div>
        </div>

        <div>
            <label for="adresse">Salaire</label>
            <div> <input type="text" name="salaire" id="salaire" value="<?= $employe['EMPSALAIRE'] ?>"> </div>
        </div>

        <div>
            <label for="tel">Prime</label>
            <div> <input type="text" name="prime" id="prime" value="<?= $employe['EMPPRIME'] ?>"> </div>
        </div>

        <div>
            <label for="tel">Service</label>
            <div> <input type="text" name="service" id="service" value="<?= $employe['SRVNO'] ?>"> </div>
        </div>

        <div>
            <div> <button type="submit" name="">Valider</button> </div>
        </div>
    </form>
</fieldset>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation employés</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once 'connexion.php' ?>

<?php
    if (!empty($_POST)) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $salaire = $_POST['salaire'];
        $prime = $_POST['prime'];
        $service = $_POST['service'];

    $sql = "INSERT INTO employes (empnom, emppren, empsexe, empsalaire, empprime, srvno) 
            VALUES ('$nom', '$prenom', '$sexe', '$salaire', $prime, $service)";
    $reponse = $con->exec($sql);

    if ($reponse) {
        echo "Insertion efféctuée avec succès, redirect en 5 seconds";
        } else {
        echo "Problème d'insertion du client";
    }
header("Refresh:5; url=employes.php");
}
?>

<fieldset>
    <legend><h2>Nouvel Employé</h2></legend>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <label for="nom">Nom</label>
            <div> <input type="text" name="nom" id="nom" placeholder=""> </div>
        </div>

        <div>
            <label for="prenom">Prénom</label>
            <div> <input type="text" name="prenom" id="prenom" placeholder=""> </div>
        </div>

        <div>
            <label for="Sexe">Sexe</label>
            <div> <input type="text" name="sexe" id="sexe" placeholder=""> </div>
        </div>

        <div>
            <label for="salaire">Salaire</label>
            <div> <input type="text" name="salaire" id="salaire" placeholder=""> </div>
        </div>
                
        <div>
            <label for="prime">Prime</label>
            <div> <input type="tel" name="prime" id="prime" placeholder=""> </div>
        </div>
                
        <div>
            <label for="prime">Service</label>
            <div> <input type="service" name="service" id="service" placeholder=""> </div>
        </div>

        <div>
            <div> <button type="submit" name="" id="">Valider</button> </div>
        </div>
    </form>
</fieldset>
</body>
</html>
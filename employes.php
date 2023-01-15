<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les données des employés</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'connexion.php' ?>
<?php
    $sql = 'SELECT * FROM employes';
    $reponse = $con->query($sql);
    $employes = $reponse->fetchAll(PDO::FETCH_ASSOC);
?>

<center>
<div>

    <div>
        <a href="index.php">
            <button class="button">Page d'accuil</button>
        </a>
    </div>

    <div>
        <a href=http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=entreprise&table=employes>
            <button class="button">Database employes</button>
        </a>
    </div>

    <div>
        <a href="createEmploye.php">
            <button class="button">Nouvel employé</button>
        </a>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Salaire</th>
                    <th>Prime</th>
                    <th>Service</th>
                    <th>Supprimer</th>
                    <th>Modifier</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employes as $employe) : ?>
                <tr>
                    <td><?php echo $employe["EMPNO"] ?></td>
                    <td><?= $employe["EMPNOM"] ?></td>
                    <td><?= $employe["EMPPREN"] ?></td>
                    <td><?= $employe["EMPSEXE"] ?></td>
                    <td><?= $employe["EMPSALAIRE"] ?></td>
                    <td><?= $employe["EMPPRIME"] ?></td>
                    <td><?= $employe["SRVNO"] ?></td>
                    <td> <a onclick="return confirm('supprimer?')" href="deleteEmploye.php?empno=<?= $employe["EMPNO"] ?>" class="button">SUP</a> </td>
                    <td> <a onclick="return confirm('modifier?')" href="updateFormEmploye.php?empno=<?= $employe["EMPNO"] ?>" class="button">MOD</a> </td>                         
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</center>
</body>
</html>
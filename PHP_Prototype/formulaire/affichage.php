<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $cp = $_POST['cp'];

} else {

    $nom = "";
    $prenom = "";
    $adresse = "";
    $ville = "";
    $cp = "";
}
?>
<html>
<head>
    <title>Résultat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Données du client</h2>
        
        <table>
            <tr>
                <th>Champ</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <td>Nom</td>
                <td><?= $nom; ?></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><?= $prenom; ?></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td><?= $adresse; ?></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><?= $ville; ?></td>
            </tr>
            <tr>
                <td>Code postal</td>
                <td><?= $cp; ?></td>
            </tr>
        </table>
        
        <br>
        <a href="formulaire.php">Retour au formulaire</a>
    </div>
</body>
</html>
<?php
// Traitement du formulaire
if (isset($_POST['submit'])) {

    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $commentaire = $_POST['commentaires'];
    $date = date("d/m/y H:i:s");

    // Vérification des champs
    if (!empty($nom) && !empty($mail) && !empty($commentaire)) {

        // Nettoyage des caractères spéciaux
        $nom = str_replace("|", "", $nom);
        $mail = str_replace("|", "", $mail);
        $commentaire = str_replace(array("\n", "\r", "|"), " ", $commentaire);

        // Création de la ligne : <<Nom|Mail|Date|Message>>
        $ligne = "<<" . $nom . "|" . $mail . "|" . $date . "|" . $commentaire . ">>" . "\n";

        // Enregistrement dans le fichier
        $fichier = fopen("avis.txt", "a");
        fwrite($fichier, $ligne);
        fclose($fichier);
    }
}

// Lecture des avis existants
$tableau_avis = array();
if (file_exists("avis.txt")) {
    $lignes = file("avis.txt");

    // On inverse pour avoir les plus récents en premier
    $lignes_inverse = array_reverse($lignes);

    $compteur = 0;

    foreach ($lignes_inverse as $une_ligne) {
        if ($compteur < 5) {
            $une_ligne = trim($une_ligne);

            if ($une_ligne != "") {
                // Extraction des données
                // On enlève << au début et >> à la fin
                $temp = substr($une_ligne, 2);
                $temp = substr($temp, 0, -2);

                $infos = explode("|", $temp);

                if (count($infos) == 4) {
                    $tableau_avis[] = array(
                        'nom' => $infos[0],
                        'mail' => $infos[1],
                        'date' => $infos[2],
                        'message' => $infos[3]
                    );
                    $compteur++;
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Livre d'or PHP 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <fieldset>
            <legend>Donnez votre avis sur PHP 8 !</legend>
            <form method="post" action="index.php">
                <div class="form-group">
                    <label>Nom :</label>
                    <input type="text" name="nom">
                </div>

                <div class="form-group">
                    <label>Mail :</label>
                    <input type="text" name="mail">
                </div>

                <div class="form-group" style="align-items: flex-start;">
                    <label>Vos commentaires sur le site</label>
                    <textarea name="commentaires"></textarea>
                </div>

                <div class="actions">
                    <input type="submit" name="submit" value="Envoyer">
                    <input type="button" value="Afficher los avis">
                </div>
            </form>
        </fieldset>

        <h3>Liste des avis</h3>

        <div class="review-list">
        <?php
        $i = 1;
        foreach ($tableau_avis as $avis) {
            echo '<div class="review-item">';
            echo '<div class="review-header">';
            echo '<span>' . $i . ' : de ' . $avis['nom'] . ' (' . $avis['mail'] . ')</span>';
            echo '<span>le : ' . $avis['date'] . '</span>';
            echo '</div>';
            echo '<div class="review-content">';
            echo $avis['message'];
            echo '</div>';
            echo '</div>';
            $i++;
        }
        ?>
    </div>

</div>

</body>
</html>
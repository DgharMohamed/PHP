<html>
<head>
    <title>Mon Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="affichage.php" method="post">
            <fieldset>
                <legend>Adresse client</legend>
                
                <div class="form-group">
                    <label>Nom :</label>
                    <input type="text" name="nom">
                </div>

                <div class="form-group">
                    <label>Prénom :</label>
                    <input type="text" name="prenom">
                </div>

                <div class="form-group">
                    <label>Adresse :</label>
                    <input type="text" name="adresse">
                </div>

                <div class="form-group">
                    <label>Ville :</label>
                    <input type="text" name="ville">
                </div>

                <div class="form-group">
                    <label>Code postal :</label>
                    <input type="text" name="cp">
                </div>

                <input type="submit" value="Envoyer">
            </fieldset>
        </form>
    </div>
</body>
</html>
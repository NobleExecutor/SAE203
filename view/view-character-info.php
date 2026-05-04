<?php
    // On récupère les paramètres dans l'URL grâce à GET pour savoir quoi afficher ensuite
    $id = $_GET['id'] ?? 0;
    // L'opérateur '??' permet de dire: "Si le paramètre GET existe dans l'URL, alors $type prendra sa valeur, sinon $type sera vide"

    $query = "SELECT id_personnage, nom, nom_japonais, age, DATE_FORMAT(date_de_naissance, '%d %M %Y') AS date, description, pilote, nerv, seele, civil, img, id_unit, nom_unit, ame_unit, img_unit FROM personnages WHERE id_personnage = '$id';";
    $currentCharacter = getAllEntries($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/fontface.css">
    <link rel="stylesheet" href="css/style-global.css">
    <link rel="stylesheet" href="css/style-info.css">
    <title>NGE Wiki - Fiche d'informations</title>
</head>

<body>
    <nav>
        <a class="nav-logo" href="index.php">
            <span class="nav-logo-top">Neon Genesis</span>
            <span class="nav-logo-main">Evangelion</span>
        </a>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="characters.php" class="active">Personnages</a></li>
            <li><a href="episodes.php">Episodes</a></li>
            <li><a href="units.php">Unités EVA</a></li>
            <li><a href="angels.php">Anges</a></li>
        </ul>
    </nav>

    <main class="info-page">
        <header class="page-header info-header">
            <div>
                <p class="page-header-label">BDD / Fiche
                </p>
                <h1 class="page-header-title">
                    <?= $currentCharacter[0]['nom'] ?>
                    <span class="jp"><?= $currentCharacter[0]['nom_japonais'] ?></span>
                </h1>
            </div>
            <a class="info-back-link" href="characters.php">Retour a la liste</a>
        </header>

            <section class="info-hero">
            <div class="info-portrait-card">
                <div class="info-portrait-frame">
                    <img src="<?php echo "assets/img/characters/" . $currentCharacter[0]['img'];?>" class="info-portrait-image">
                    <div class="info-portrait-gradient"></div>
                    <div class="info-portrait-code">FILE 01</div>
                </div>
            </div>

            <div class="info-summary-panel">
                <div class="info-summary-topline">
                    <span>Fichiers du personnel</span>
                    <span>Informations classifiées</span>
                </div>

                <div class="info-summary-copy">
                    <p><?= $currentCharacter[0]['description'] ?></p>
                </div>

                <div class="info-data-grid">
                    <div class="info-data-card">
                        <span class="info-data-label">Nom complet</span>
                        <strong class="info-data-value"><?= $currentCharacter[0]['nom'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Nom japonais</span>
                        <strong class="info-data-value"><?= $currentCharacter[0]['nom_japonais'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Age</span>
                        <strong class="info-data-value"><?= $currentCharacter[0]['age'] === null ? "Inconnu" : $currentCharacter[0]['age'] . " ans" ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Date de naissance</span>
                        <strong class="info-data-value"><?= $currentCharacter[0]['date'] === null ? "Inconnu" : $currentCharacter[0]['date'] ?></strong>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="bottom-bar">
        <span>EVA-WIKI >Fiche informations détaillées</span>
        <span>NERV HQ — Tokyo-3</span>
    </div>
</body>

</html>

<?php
    // On récupère les paramètres dans l'URL grâce à GET pour savoir quoi afficher ensuite
    $id = $_GET['id'] ?? 0;
    // L'opérateur de coalescence nulle (??) permet de vérifier si une variable est nulle ou non, ça remplace une vérification par isset()

    $query = "SELECT nom, id_unit, nom_unit, ame_unit, img_unit, description_unit FROM personnages WHERE id_unit = $id;";
    $currentUnit = getAllEntries($query);
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
            <li><a href="characters.php">Personnages</a></li>
            <li><a href="episodes.php">Episodes</a></li>
            <li><a href="units.php" class="active">Unités EVA</a></li>
            <li><a href="angels.php">Anges</a></li>
        </ul>
    </nav>

    <main class="info-page">
        <header class="page-header info-header">
            <div>
                <p class="page-header-label">BDD / Fiche des unités EVA
                </p>
                <h1 class="page-header-title">
                    <?= $currentUnit[0]['nom_unit'] ?>
                    <span class="jp"><?= $currentUnit[0]['nom_japonais'] ?></span>
                </h1>
            </div>
            <a class="info-back-link" href="units.php">Retour a la liste</a>
        </header>

            <section class="info-hero">
            <div class="info-portrait-card">
                <div class="info-portrait-frame">
                    <img src="assets/img/units/<?= $currentUnit[0]['img_unit'] ;?>" class="info-portrait-image">
                    <div class="info-portrait-gradient"></div>
                    <div class="info-portrait-code">FILE 01</div>
                </div>
            </div>

            <div class="info-summary-panel">
                <div class="info-summary-topline">
                    <span>Fichiers des unités EVA</span>
                    <span>Informations classifiées</span>
                </div>

                <div class="info-summary-copy">
                    <p><?= nl2br($currentUnit[0]['description_unit']) ?></p>
                </div>

                <div class="info-data-grid">
                    <div class="info-data-card">
                        <span class="info-data-label">Nom complet</span>
                        <strong class="info-data-value"><?= $currentUnit[0]['nom_unit'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Pilote attitré</span>
                        <strong class="info-data-value"><?= $currentUnit[0]['nom'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Unité Evangelion N°</span>
                        <strong class="info-data-value"><?= $currentUnit[0]['id_unit'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Ame</span>
                        <strong class="info-data-value"><?= $currentUnit[0]['ame_unit'] === null ? "Inconnu" : $currentUnit[0]['ame_unit'] ?></strong>
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

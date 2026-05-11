<?php
    // On récupère les paramètres dans l'URL grâce à GET pour savoir quoi afficher ensuite
    $id = $_GET['id'] ?? 0;
    // L'opérateur de coalescence nulle (??) permet de vérifier si une variable est nulle ou non, ça remplace une vérification par isset()

    $query = "SELECT id_ep, nom_ange, titre, titre_japonais, DATE_FORMAT(air_date, '%d %M %Y') AS date, arc, description FROM episodes WHERE id_ep = $id;";
    $currentEpisode = getAllEntries($query);
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
            <li><a href="episodes.php" class="active">Episodes</a></li>
            <li><a href="units.php">Unités EVA</a></li>
            <li><a href="angels.php">Anges</a></li>
        </ul>
    </nav>

    <main class="info-page">
        <header class="page-header info-header">
            <div>
                <p class="page-header-label">BDD / Fiche des épisodes
                </p>
                <h1 class="page-header-title">
                    <?= $currentEpisode[0]['titre'] ?>
                    <span class="jp"><?= $currentEpisode[0]['titre_japonais'] ?></span>
                </h1>
            </div>
            <a class="info-back-link" href="episodes.php">Retour a la liste</a>
        </header>

            <section class="info-hero">
            <div class="info-portrait-card">
                <div class="info-portrait-frame">
                    <img src="assets/img/<?= $currentEpisode[0]['id_ep'] === 27 ? "eoe.png" : "nge.png"; ?>" class="info-portrait-image">
                    <div class="info-portrait-gradient"></div>
                    <div class="info-portrait-code">FILE 01</div>
                </div>
            </div>

            <div class="info-summary-panel">
                <div class="info-summary-topline">
                    <span>Fichiers des épisodes</span>
                    <span>Informations classifiées</span>
                </div>

                <div class="info-summary-copy">
                    <p><?= nl2br($currentEpisode[0]['description']) ?></p>
                </div>

                <div class="info-data-grid">
                    <div class="info-data-card">
                        <span class="info-data-label">Titre</span>
                        <strong class="info-data-value"><?= $currentEpisode[0]['titre'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Titre japonais</span>
                        <strong class="info-data-value"><?= $currentEpisode[0]['titre_japonais'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Date de sortie</span>
                        <strong class="info-data-value"><?= $currentEpisode[0]['date'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Ange apparu</span>
                        <strong class="info-data-value"><?= $currentEpisode[0]['nom_ange'] === null ? "Aucun" : $currentEpisode[0]['nom_ange'] ?></strong>
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

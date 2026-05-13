<?php
    // On récupère les paramètres dans l'URL grâce à GET pour savoir quoi afficher ensuite
    $id = $_GET['id'] ?? 0;
    // L'opérateur de coalescence nulle (??) permet de vérifier si une variable est nulle ou non, ça remplace une vérification par isset()
    
    $query = "SELECT a.id_ange, a.nom AS nom_ange, a.nom_japonais, a.img, a.description, a.mort, t.id_personnage, p.nom AS nom_personnage FROM anges a LEFT JOIN tue t ON a.id_ange = t.id_ange LEFT JOIN personnages p ON t.id_personnage = p.id_personnage WHERE a.id_ange = $id;";
    $currentAngel = getAllEntries($query);
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
            <li><a href="units.php">Unités EVA</a></li>
            <li><a href="angels.php" class="active">Anges</a></li>
        </ul>
    </nav>

    <main class="info-page">
        <header class="page-header info-header">
            <div>
                <p class="page-header-label">BDD / Fiche Ange
                </p>
                <h1 class="page-header-title">
                    <?= $currentAngel[0]['nom_ange'] ?>
                    <span class="jp"><?= $currentAngel[0]['nom_japonais'] ?></span>
                </h1>
            </div>
            <a class="info-back-link" href="angels.php">Retour a la liste</a>
        </header>

            <section class="info-hero">
            <div class="info-portrait-card">
                <div class="info-portrait-frame">
                    <img src="assets/img/angels/<?= $currentAngel[0]['img']; ?>" alt="Portrait de <?= $currentAngel[0]['nom_ange'] ?>" class="info-portrait-image">
                    <div class="info-portrait-code">FILE 01</div>
                </div>
            </div>

            <div class="info-summary-panel">
                <div class="info-summary-topline">
                    <span>Fichiers des anges</span>
                    <span>Informations classifiées</span>
                </div>

                <div class="info-summary-copy">
                    <p><?= $currentAngel[0]['description'] ?></p>
                    <p><?= $currentAngel[0]['mort'] ?></p>
                </div>

                <div class="info-data-grid">
                    <div class="info-data-card">
                        <span class="info-data-label">Nom complet</span>
                        <strong class="info-data-value"><?= $currentAngel[0]['nom_ange'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Nom japonais</span>
                        <strong class="info-data-value"><?= $currentAngel[0]['nom_japonais'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Tué par :</span>
                        <strong class="info-data-value"><?= $currentAngel[0]['nom_personnage'] === null ? "Inconnu" : $currentAngel[0]['nom_personnage'] ?></strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Ange N°</span>
                        <strong class="info-data-value"><?= $currentAngel[0]['id_ange'] ?></strong>
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

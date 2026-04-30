<?php
    // On récupère les paramètres dans l'URL grâce à GET pour savoir quoi afficher ensuite
    $type = $_GET['type'] ?? "";
    $id = $_GET['id'] ?? "";
    // L'opérateur '??' permet de dire: "Si le paramètre GET existe dans l'URL, alors $type prendra sa valeur, sinon $type sera vide"
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
            <!-- Ici, on vérifie dynamiquement le contenu de $type pour pouvoir ajouter une classe au bon lien de la nav bar. La notation $type === "type" ? "active" : "" est une façon d'écrire une instruction if en une ligne, plus pratique et plus lisible pour le code -->
            <li><a href="characters.php" class="<?= $type === "character" ? "active" : "" ?>">Personnages</a></li>
            <li><a href="episodes.php" class="<?= $type === "episode" ? "active" : "" ?>">Episodes</a></li>
            <li><a href="units.php" class="<?= $type === "unit" ? "active" : "" ?>">Unités EVA</a></li>
            <li><a href="angels.php" class="<?= $type === "angel" ? "active" : "" ?>">Anges</a></li>
        </ul>
    </nav>

    <div class="corner corner--tl"></div>
    <div class="corner corner--tr"></div>
    <div class="corner corner--bl"></div>
    <div class="corner corner--br"></div>

    <main class="info-page">
        <header class="page-header info-header">
            <div>
                <p class="page-header-label">BDD / Fiche
                <?php
                    // Ici on affiche dynamiquement de quel type de fiche il s'agit en fonction du paramètre $type
                    if ($type === "character")
                        echo "personnage";
                    if ($type === "unit")
                        echo "unité EVA";
                    if ($type === "angel")
                        echo "ange";
                    if ($type === "episode")
                        echo "épisode";
                ?>
                </p>
                <h1 class="page-header-title">
                    Shinji Ikari
                    <span class="jp">碇シンジ</span>
                </h1>
            </div>
            <a class="info-back-link" href="<?= $type ?>s.php">Retour a la liste</a>
        </header>

        <section class="info-hero">
            <div class="info-portrait-card">
                <div class="info-portrait-frame">
                    <img src="assets/img/characters/shinji_ikari.png" alt="Portrait de Shinji Ikari" class="info-portrait-image">
                    <div class="info-portrait-gradient"></div>
                    <div class="info-portrait-code">FILE 01</div>
                </div>

                <div class="info-portrait-meta">
                    <div class="info-meta-block">
                        <span class="info-meta-label">Affiliation</span>
                        <span class="info-meta-value">NERV / Eva Unit-01 Pilot</span>
                    </div>
                    <div class="info-meta-block">
                        <span class="info-meta-label">Statut</span>
                        <span class="info-meta-value">Active Personnel Record</span>
                    </div>
                    <div class="info-meta-block">
                        <span class="info-meta-label">Origine</span>
                        <span class="info-meta-value">Tokyo-3</span>
                    </div>
                </div>
            </div>

            <div class="info-summary-panel">
                <div class="info-summary-topline">
                    <span>Fichiers du personnel</span>
                    <span>Informations classifiées</span>
                </div>

                <div class="info-chip-row">
                    <span class="info-chip">Pilote</span>
                    <span class="info-chip">NERV</span>
                    <span class="info-chip">Eva-01</span>
                    <span class="info-chip">Main Cast</span>
                </div>

                <div class="info-summary-copy">
                    <p>
                        Shinji Ikari est le protagoniste principal de <em>Neon Genesis Evangelion</em>. Introverti, reserve et souvent hesitant, il est appele a Tokyo-3 pour piloter l'EVA-01 au coeur du conflit entre la NERV et les Anges.
                    </p>
                    <p>
                        Derriere son apparente fragilite, le personnage incarne une tension constante entre devoir, peur, solitude et desir de reconnaissance. Son parcours structure l'identite psychologique et dramatique de la serie.
                    </p>
                </div>

                <div class="info-data-grid">
                    <div class="info-data-card">
                        <span class="info-data-label">Nom complet</span>
                        <strong class="info-data-value">Shinji Ikari</strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Nom japonais</span>
                        <strong class="info-data-value">碇シンジ</strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Age</span>
                        <strong class="info-data-value">14 ans</strong>
                    </div>
                    <div class="info-data-card">
                        <span class="info-data-label">Affiliation principale</span>
                        <strong class="info-data-value">NERV</strong>
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

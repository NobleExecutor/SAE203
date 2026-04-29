<?php
  $episodesCount = getTableTotal($table = "episodes");
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/fontface.css">
    <link rel="stylesheet" href="css/style-global.css">
    <link rel="stylesheet" href="css/style-episodes.css">
    <title>NGE Wiki - Episodes</title>
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
 
    <!-- Corner brackets -->
    <div class="corner corner--tl"></div>
    <div class="corner corner--tr"></div>
    <div class="corner corner--bl"></div>
    <div class="corner corner--br"></div>
 
    <main>
 
        <!-- Page header -->
        <header class="page-header">
            <p class="page-header-label">BDD &nbsp;/&nbsp; Archives de diffusion</p>
            <h1 class="page-header-title">
                Episodes
                <span class="jp">エピソード</span>
            </h1>
        </header>
 
        <!-- Search -->
        <div class="search-wrap">
            <div class="search-inner">
                <span class="search-icon">[ SRH ]</span>
                <input
                    class="search-input"
                    id="searchInput"
                    type="text"
                    placeholder="Rechercher un épisode..."
                />
                <span class="search-count"><?= $episodesCount[0]["total"] ?> résultats disponibles</span>
            </div>
        </div>
 
        <!-- Filters (arcs) -->
        <div class="filters">
            <label>
                <input class="filter-checkbox" type="checkbox" name="arc" value="all" checked>
                <span class="filter-btn">Tout</span>
            </label>
            <label>
                <input class="filter-checkbox" type="checkbox" name="arc" value="arc-1">
                <span class="filter-btn">Ep. 01–06</span>
            </label>
            <label>
                <input class="filter-checkbox" type="checkbox" name="arc" value="arc-2">
                <span class="filter-btn">Ep. 07–13</span>
            </label>
            <label>
                <input class="filter-checkbox" type="checkbox" name="arc" value="arc-3">
                <span class="filter-btn">Ep. 14–19</span>
            </label>
            <label>
                <input class="filter-checkbox" type="checkbox" name="arc" value="arc-4">
                <span class="filter-btn">Ep. 20–26</span>
            </label>
        </div>
 
        <!-- Results meta -->
        <div class="results-meta">
            <span>Affichage de <span id="currentEpNb"></span> / <?= $episodesCount[0]["total"] ?> épisodes</span>
        </div>
 
        <!-- Episodes list -->
        <div class="episodes-list">
 
            <?php
                $allEpisodes = getAllEpisodes();
                foreach ($allEpisodes as $episode) {
            ?>
            <a class="episode-row" href="info.php?type=episode&id=<?= $episode['id_ep'] ?>">
 
                <div class="episode-number">
                    <span class="ep-label">EP</span>
                    <span class="ep-num"><?= $episode['id_ep'] ?></span>
                </div>
 
                <div class="episode-titles">
                    <div class="episode-title-jp"><?= $episode['titre_japonais'] ?></div>
                    <div class="episode-title-fr"><?= $episode['titre'] ?></div>
                </div>
 
                <div class="episode-meta">
                    <div class="episode-date">
                        <span class="meta-label">Diffusion</span>
                        <span class="meta-value"><?= $episode['date'] ?></span>
                    </div>
                    <div class="episode-arc">
                        <span class="arc-tag"><?= $episode['arc_label'] ?></span>
                    </div>
                </div>
 
                <div class="episode-arrow">→</div>
 
            </a>
            <?php
                }
            ?>
 
        </div>
 
    </main>
 
    <!-- Bottom bar -->
    <div class="bottom-bar">
        <span>EVA-WIKI &nbsp; Broadcast Archives</span>
        <span>NERV &nbsp; HQ &nbsp;—&nbsp; Tokyo-3</span>
    </div>

    <script src="js/search-episodes.js"></script>
</body>
</html>

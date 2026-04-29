<?php
  $personnagesCount = getTableTotal($table = "personnages");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/fontface.css">
    <link rel="stylesheet" href="css/style-global.css">
    <title>NGE Wiki - Personnages</title>
</head>

<body>
    <nav>
    <a class="nav-logo" href="index.php">
      <span class="nav-logo-top">Neon Genesis</span>
      <span class="nav-logo-main">Evangelion</span>
    </a>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="#" class="active">Personnages</a></li>
      <li><a href="episodes.php">Episodes</a></li>
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
      <p class="page-header-label">BDD &nbsp;/&nbsp; Fichiers du personnel</p>
      <h1 class="page-header-title">
        Personnages
        <span class="jp">登場人物</span>
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
          placeholder="Rechercher un personnage..."
        />
        <span class="search-count"><?= $personnagesCount[0]["total"] ?> résultats disponibles</span>
      </div>
    </div>
 
    <!-- Filters -->
    <div class="filters">
      <label>
        <input class="filter-checkbox" type="checkbox" checked>
        <span class="filter-btn">Tout</span>
      </label>
      <label>
        <input class="filter-checkbox" type="checkbox">
        <span class="filter-btn">Pilote</span>
      </label>
      <label>
        <input class="filter-checkbox" type="checkbox">
        <span class="filter-btn">NERV</span>
      </label>
      <label>
        <input class="filter-checkbox" type="checkbox">
        <span class="filter-btn">SEELE</span>
      </label>
    </div>
 
    <!-- Results meta -->
    <div class="results-meta">
      <span>Affichage de <span id="currentCardNb"></span> / <?=$personnagesCount[0]['total']?> résultats</span>
    </div>
 
    <div class="character-grid">

    <?php
      $allCharacters = getAllCharacters();

      foreach($allCharacters as $character) {
    ?>
        <a class="character-card" href="info.php?type=character&id=<?= $character['id']?>">
            <div class="card-image">
              <img src="assets/img/characters/<?=$character['img']?>" alt="<?= $character['nom']?>">
              <div class="card-overlay"></div>
            </div>
          <div class="card-info">
            <div class="card-name-jp"><?= $character['nom_japonais']?></div>
            <div class="card-name-en"><?= $character['nom']?></div>
            <div class="card-tags">
              <span class="card-tag">Placeholder tag</span>
            </div>
          </div>
        </a>
    <?php
      }
    ?>
 
    </div>
 
  </main>
 
  <!-- Bottom bar -->
  <div class="bottom-bar">
    <span>EVA-WIKI &nbsp; Personnel Database</span>
    <span>NERV &nbsp; HQ &nbsp;—&nbsp; Tokyo-3</span>
  </div>

  <script src="js/search-global.js"></script>
</body>

</html>

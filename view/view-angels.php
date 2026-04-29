<?php
  $angelsCount = getTableTotal($table = "anges");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontface.css">
    <link rel="stylesheet" href="css/style-global.css">
    <title>NGE Wiki - Anges</title>
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
      <li><a href="#" class="active">Anges</a></li>
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
      <p class="page-header-label">BDD &nbsp;/&nbsp; Fichiers des anges</p>
      <h1 class="page-header-title">
        Anges
        <span class="jp">天使たち</span>
      </h1>
    </header>
 
    <!-- Search -->
    <div class="search-wrap">
      <div class="search-inner">
        <span class="search-icon">[ SRH ]</span>
        <input
          class="search-input"
          type="text"
          placeholder="Rechercher un ange..."
        />
        <span class="search-count"><?= $angelsCount[0]["total"] ?> résultats disponibles</span>
      </div>
    </div>
 
    <!-- Filters -->
    <div class="filters">
      <label>
        <input class="filter-checkbox" type="checkbox" checked>
        <span class="filter-btn">Tout</span>
      </label>
    </div>
 
    <!-- Results meta -->
    <div class="results-meta">
      <span>Affichage de x / x résultats</span>
    </div>
 
    <!-- Placeholder, à changer -->
    <div class="character-grid">
 
    <?php
      $allAngels = getAllAngels();

      foreach($allAngels as $angel) {
    ?>
        <a class="character-card" href="info.php?type=angel&id=<?= $angel['num']?>">
            <div class="card-image">
              <img src="assets/img/angels/<?=$angel['img']?>" alt="<?= $angel['nom']?>">
              <div class="card-overlay"></div>
            </div>
          <div class="card-info">
            <div class="card-name-jp"><?= $angel['nom_japonais']?></div>
            <div class="card-name-en"><?= $angel['nom']?></div>
            <div class="card-tags">
              <span class="card-tag">Ange N°<?= $angel['num']?></span>
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
</body>

</html>

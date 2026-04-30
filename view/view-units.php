<?php
  $unitsCount = getUnitTotal();
  $query = "SELECT DISTINCT id_unit, nom_unit, img_unit, ame_unit FROM personnages WHERE nom_unit IS NOT NULL ORDER BY id_unit ASC;";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/fontface.css">
    <link rel="stylesheet" href="css/style-global.css">
    <title>NGE Wiki - Unités EVA</title>
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
      <li><a href="#" class="active">Unités EVA</a></li>
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
      <p class="page-header-label">BDD / Fichiers des unités EVA</p>
      <h1 class="page-header-title">
        Unites EVA
        <span class="jp">EVAユニット</span>
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
          placeholder="Rechercher une unité EVA..."
        />
        <span class="search-count"><?= $unitsCount[0]["total"] ?> résultats disponibles</span>
      </div>
    </div>
 
    <!-- Filters -->
    <div class="filters">
      <label>
        <input class="filter-checkbox" type="checkbox" name="filtreYui" id="yui">
        <span class="filter-btn">Yui</span>
      </label>
      <label>
        <input class="filter-checkbox" type="checkbox" name="filtreKyoko" id="kyoko">
        <span class="filter-btn">Kyoko</span>
      </label>
      <label>
        <input class="filter-checkbox" type="checkbox" name="filtreAutre" id="autre">
        <span class="filter-btn">Autre</span>
      </label>
    </div>
 
    <!-- Results meta -->
    <div class="results-meta">
      <span>Affichage de <span id="currentCardNb"></span> / <?=$unitsCount[0]['total']?> résultats</span>
    </div>
 
    <div class="character-grid">
 
    <?php
      $allUnits = getAllEntries($query);

      foreach($allUnits as $unit) {
        $filtres = array();

        if ($unit['ame_unit'] == "Yui Ikari")
          $filtres[] = "yui";
        else if ($unit['ame_unit'] == "Kyoko Zeppelin Sohryu")
          $filtres[] = "kyoko";
        else
          $filtres[] = "autre";
    ?>
        <!-- implode permet d'assembler les éléments du tableau en ajoutant un caractère ou une chaine de caractère (ici, un espace) -->
        <a class="character-card <?= implode(' ', $filtres) ?>" href="info.php?type=unit&id=<?= $unit['id_unit']?>">
            <div class="card-image">
              <img src="assets/img/units/<?=$unit['img_unit']?>" alt="<?= $unit['nom_unit']?>">
              <div class="card-overlay"></div>
            </div>
          <div class="card-info">
            <div class="card-name-jp">Ame de <?= $unit['ame_unit']?></div>
            <div class="card-name-en"><?= $unit['nom_unit']?></div>
          </div>
        </a>
    <?php
      }
    ?>
 
    </div>
 
  </main>
 
  <!-- Bottom bar -->
  <div class="bottom-bar">
    <span>EVA-WIKI >Fichiers des unités EVA</span>
    <span>NERV HQ — Tokyo-3</span>
  </div>

  <script src="js/search-global.js"></script>
  <script src="js/filter.js"></script>
</body>

</html>

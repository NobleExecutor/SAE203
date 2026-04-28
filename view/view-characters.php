<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontface.css">
    <link rel="stylesheet" href="css/style-search.css">
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
      <li><a href="units.php">Eva Units</a></li>
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
          type="text"
          placeholder="Rechercher un personnage..."
        />
        <span class="search-count">10 résultats disponibles</span>
      </div>
    </div>
 
    <!-- Filters -->
    <div class="filters">
      <button class="filter-btn active">All</button>
      <button class="filter-btn">Pilot</button>
    </div>
 
    <!-- Results meta -->
    <div class="results-meta">
      <span>Showing 12 of 12 records</span>
      <select class="sort-select">
        <option>Sort — Name A/Z</option>
        <option>Sort — Name Z/A</option>
        <option>Sort — Unit No.</option>
        <option>Sort — Affiliation</option>
      </select>
    </div>
 
    <!-- Character grid (placeholder cards — replace with PHP loop) -->
    <div class="character-grid">
 
      <a class="character-card" href="#">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Placeholder span</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">Placeholder title</div>
          <div class="card-name-en">Placeholder subtitle</div>
          <div class="card-tags">
            <span class="card-tag">Placeholder tag</span>
            <span class="card-tag">Placeholder tag</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Placeholder span</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">Placeholder title</div>
          <div class="card-name-en">Placeholder subtitle</div>
          <div class="card-tags">
            <span class="card-tag">Placeholder tag</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Placeholder span</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">Placeholder title</div>
          <div class="card-name-en">Placeholder subtitle</div>
          <div class="card-tags">
            <span class="card-tag">Placeholder tag</span>
          </div>
        </div>
      </a>
 
    </div>
 
  </main>
 
  <!-- Bottom bar -->
  <div class="bottom-bar">
    <span>EVA-WIKI &nbsp; Personnel Database</span>
    <span>NERV &nbsp; HQ &nbsp;—&nbsp; Tokyo-3</span>
  </div>
</body>

</html>

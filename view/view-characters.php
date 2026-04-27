<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontface.css">
    <link rel="stylesheet" href="css/style-characters.css">
    <title>NGE Wiki - search</title>
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
      <li><a href="#">Episodes</a></li>
      <li><a href="#">Eva Units</a></li>
      <li><a href="#">Anges</a></li>
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
        Characters
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
          id="searchInput"
        />
        <span class="search-count" id="searchCount">10 résultats disponibles</span>
      </div>
    </div>
 
    <!-- Filters -->
    <div class="filters">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="pilot">Pilot</button>
    </div>
 
    <!-- Results meta -->
    <div class="results-meta">
      <span id="resultsLabel">Showing 12 of 12 records</span>
      <select class="sort-select" id="sortSelect">
        <option>Sort — Name A/Z</option>
        <option>Sort — Name Z/A</option>
        <option>Sort — Unit No.</option>
        <option>Sort — Affiliation</option>
      </select>
    </div>
 
    <!-- Character grid (placeholder cards — replace with PHP loop) -->
    <div class="character-grid" id="characterGrid">
 
      <a class="character-card" href="#" data-tags="pilot female">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Unit-01</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">碇シンジ</div>
          <div class="card-name-en">Ikari Shinji</div>
          <div class="card-tags">
            <span class="card-tag pilot">Pilot</span>
            <span class="card-tag nerv">NERV</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="pilot female">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Unit-00</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">綾波レイ</div>
          <div class="card-name-en">Ayanami Rei</div>
          <div class="card-tags">
            <span class="card-tag pilot">Pilot</span>
            <span class="card-tag nerv">NERV</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="pilot female">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Unit-02</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">惣流・アスカ・ラングレー</div>
          <div class="card-name-en">Asuka Langley</div>
          <div class="card-tags">
            <span class="card-tag pilot">Pilot</span>
            <span class="card-tag nerv">NERV</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="nerv male">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Cmdr.</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">碇ゲンドウ</div>
          <div class="card-name-en">Ikari Gendo</div>
          <div class="card-tags">
            <span class="card-tag nerv">NERV</span>
            <span class="card-tag seele">SEELE</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="nerv female">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Ops.</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">葛城ミサト</div>
          <div class="card-name-en">Katsuragi Misato</div>
          <div class="card-tags">
            <span class="card-tag nerv">NERV</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="nerv male">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Sci.</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">赤木リツコ</div>
          <div class="card-name-en">Akagi Ritsuko</div>
          <div class="card-tags">
            <span class="card-tag nerv">NERV</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="nerv male">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Ops.</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">冬月コウゾウ</div>
          <div class="card-name-en">Fuyutsuki Kozo</div>
          <div class="card-tags">
            <span class="card-tag nerv">NERV</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="pilot male">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Unit-03</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">渚カヲル</div>
          <div class="card-name-en">Nagisa Kaworu</div>
          <div class="card-tags">
            <span class="card-tag pilot">Pilot</span>
            <span class="card-tag angel">Angel</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="nerv male">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Ops.</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">伊吹マヤ</div>
          <div class="card-name-en">Ibuki Maya</div>
          <div class="card-tags">
            <span class="card-tag nerv">NERV</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="seele unknown">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">SEELE</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">キール・ローレンツ</div>
          <div class="card-name-en">Keel Lorenz</div>
          <div class="card-tags">
            <span class="card-tag seele">SEELE</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="angel unknown">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">3rd Angel</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">サキエル</div>
          <div class="card-name-en">Sachiel</div>
          <div class="card-tags">
            <span class="card-tag angel">Angel</span>
          </div>
        </div>
      </a>
 
      <a class="character-card" href="#" data-tags="nerv female">
        <div class="card-image">
          <div class="card-overlay"></div>
          <div class="card-scan"></div>
          <span class="card-unit">Ops.</span>
        </div>
        <div class="card-info">
          <div class="card-name-jp">洞木ヒカリ</div>
          <div class="card-name-en">Horaki Hikari</div>
          <div class="card-tags">
            <span class="card-tag nerv">NERV</span>
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
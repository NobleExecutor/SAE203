<?php
  // Traitement du formulaire d'envoi de commentaire
  if (isset($_POST['clic'])) {
    $pseudo = $_POST['username'];
    $commentaire = $_POST['comment'];
  // pas de 'else' étant donné que j'ai ajouté l'attribut 'required' aux inputs

    addComment($pseudo, $commentaire);
  }

  $commentsQuery = "SELECT id_commentaire, pseudo, commentaire, DATE_FORMAT(date, '%d/%m/%Y\, %H:%i') AS date FROM commentaires;";
  $allComments = getAllEntries($commentsQuery);

  $episodesCount = getTableTotal($table = "episodes");
  $query = "SELECT id_ep, titre, titre_japonais, DATE_FORMAT(air_date, '%d %M %Y') AS date, arc FROM episodes ORDER BY id_ep ASC;";
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
    <aside class="comments-container">
      <div class="comments-panel">
        <div class="comments-panel-head">
          <p class="comments-panel-label">Terminal / Commentaires</p>
          <h2>Commentaires</h2>
        </div>

        <div class="comments-thread">
          <?php
            foreach($allComments as $comment) {
          ?>
          <div class="comment-card">
            <div class="comment-card-head">
              <span class="comment-author"><?= $comment['pseudo'] ?></span>
              <span class="comment-date"><?= $comment['date'] ?></span>
            </div>
            <p class="comment-body"><?= nl2br($comment['commentaire']) ?></p>
          </div>
          <?php
            }
          ?>
        </div>

        <form class="comments-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
          <label for="pseudo" class="comments-form-label">Pseudonyme</label>
          <input type="text" id="pseudo" name="username" class="comments-input" placeholder="Votre pseudonyme..." maxlength="15" required>

          <label class="comments-form-label" for="commentMessage">Commentaire</label>
          <textarea id="commentMessage" name="comment" class="comments-input" placeholder="Ecrire un commentaire..." required></textarea>

          <button type="submit" name="clic" class="comments-submit">Publier</button>
        </form>
      </div>
    </aside>

    <button class="comments-container-btn" type="button">
      <img src="assets/svg/message.svg" id="btnSvg">
    </button>

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
 
    <main>
 
        <!-- Page header -->
        <header class="page-header">
            <p class="page-header-label">BDD / Archives de diffusion</p>
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
                <input class="filter-checkbox" type="checkbox" name="arc" value="arc-1">
                <span class="filter-btn">Ep. 01-06</span>
            </label>
            <label>
                <input class="filter-checkbox" type="checkbox" name="arc" value="arc-2">
                <span class="filter-btn">Ep. 07-13</span>
            </label>
            <label>
                <input class="filter-checkbox" type="checkbox" name="arc" value="arc-3">
                <span class="filter-btn">Ep. 14-19</span>
            </label>
            <label>
                <input class="filter-checkbox" type="checkbox" name="arc" value="arc-4">
                <span class="filter-btn">Ep. 20-26</span>
            </label>
        </div>
 
        <!-- Results meta -->
        <div class="results-meta">
            <span>Affichage de <span id="currentEpNb"></span> / <?= $episodesCount[0]["total"] ?> épisodes</span>
        </div>
 
        <!-- Episodes list -->
        <div class="episodes-list">
 
            <?php
                $allEpisodes = getAllEntries($query);
                foreach ($allEpisodes as $episode) {
            ?>
            <a class="episode-row arc-<?= $episode['arc'] ?>" href="episode-info.php?id=<?= $episode['id_ep'] ?>">
 
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
                        <span class="arc-tag">Arc N°<?= $episode['arc'] ?></span>
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
        <span>EVA-WIKI >Archives de diffusion</span>
        <span>NERV HQ — Tokyo-3</span>
    </div>

    <script src="js/search-episodes.js"></script>
    <script src="js/filter-episodes.js"></script>
    <script src="js/comments.js"></script>
</body>
</html>

<?php
  // Traitement du formulaire d'envoi de commentaire
  if (isset($_POST['clic'])) {
    $pseudo = $_POST['username'];
    $commentaire = $_POST['comment'];

    addComment($pseudo, $commentaire);
  }

  $commentsQuery = "SELECT id_commentaire, pseudo, commentaire, DATE_FORMAT(date, '%d/%m/%Y\, %H:%i') AS date FROM commentaires;";
  $allComments = getAllEntries($commentsQuery);

  $personnagesCount = getTableTotal($table = "personnages");
  $query = "SELECT * FROM personnages;";
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
      <li><a href="#" class="active">Personnages</a></li>
      <li><a href="episodes.php">Episodes</a></li>
      <li><a href="units.php">Unités EVA</a></li>
      <li><a href="angels.php">Anges</a></li>
    </ul>
  </nav>
 
  <main>
 
    <!-- Page header -->
    <header class="page-header">
      <p class="page-header-label">BDD / Fichiers du personnel</p>
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
        <span class="search-count"><?= $personnagesCount[0]['total'] ?> résultats disponibles</span>
      </div>
    </div>
 
    <!-- Filters -->
    <div class="filters">
      <label>
        <input class="filter-checkbox" type="checkbox" name="filtrePilote" id="pilote">
        <span class="filter-btn">Pilote</span>
      </label>
      <label>
        <input class="filter-checkbox" type="checkbox" name="filtreNerv" id="nerv">
        <span class="filter-btn">NERV</span>
      </label>
      <label>
        <input class="filter-checkbox" type="checkbox" name="filtreSeele" id="seele">
        <span class="filter-btn">SEELE</span>
      </label>
      <label>
        <input class="filter-checkbox" type="checkbox" name="filtreCivil" id="civil">
        <span class="filter-btn">Civil</span>
      </label>
    </div>
 
    <!-- Results meta -->
    <div class="results-meta">
      <span>Affichage de <span id="currentCardNb"></span> / <?=$personnagesCount[0]['total']?> résultats</span>
    </div>
 
    <div class="character-grid">

    <?php
      $allCharacters = getAllEntries($query);

      foreach($allCharacters as $character) {
        $tags = array();

        // Vérification des tags
        if ($character['nerv'] == 1)
          $tags[] = "nerv";
        if ($character['seele'] == 1)
          $tags[] = "seele";
        if ($character['pilote'] == 1)
          $tags[] = "pilote";
        if ($character['civil'] == 1)
          $tags[] = "civil";
    ?>
        <!-- implode permet d'assembler les éléments du tableau en ajoutant un caractère ou une chaine de caractère (ici, un espace) -->
        <a class="character-card <?= implode(' ', $tags) ?>" href="character-info.php?id=<?= $character['id_personnage']?>">
            <div class="card-image">
              <img src="assets/img/characters/<?=$character['img']?>" alt="<?= $character['nom']?>">
            </div>
          <div class="card-info">
            <div class="card-name-jp"><?= $character['nom_japonais']?></div>
            <div class="card-name-en"><?= $character['nom']?></div>
            <div class="card-tags">
              <?php foreach ($tags as $tag) { ?>
                <span class="card-tag"><?= $tag ?></span>
              <?php } ?>
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
    <span>EVA-WIKI >Fichiers du personnel</span>
    <span>NERV HQ — Tokyo-3</span>
  </div>

  <script src="js/search-global.js"></script>
  <script src="js/filter.js"></script>
  <script src="js/comments.js"></script>
</body>

</html>

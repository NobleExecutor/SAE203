<?php
    $personnagesCount = getTableTotal($table = "personnages");
    $episodesCount = getTableTotal($table = "episodes");
    $angesCount = getTableTotal($table = "anges");
    $unitsCount = getUnitTotal();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontface.css">
    <link rel="stylesheet" href="css/style-index.css">
    <title>NGE Wiki</title>
</head>

<body>
    <section class="title-card">
        <div class="corner corner--tl"></div>
        <div class="corner corner--tr"></div>
        <div class="corner corner--bl"></div>
        <div class="corner corner--br"></div>

        <div style="display:flex;flex-direction:column;">
            <p class="episode-label">Gainax &nbsp;·&nbsp; 1995 &ndash; 1997 &nbsp;·&nbsp; Anno Hideaki</p>

            <div class="title-block">
                <div class="word-sm">Neon</div>
                <div class="word-sm">Genesis</div>
                <div class="word-lg">Evangelion</div>
            </div>

            <div class="japanese">新世紀エヴァンゲリオン</div>

            <div class="divider"></div>

            <div class="meta-block">
                <div class="meta-row">
                    <span class="meta-label">Episodes</span>
                    <span class="meta-value"><?= $episodesCount[0]["total"]-1 ?> + The End Of Evangelion</span>
                </div>
                <div class="meta-row">
                    <span class="meta-label">Sortie</span>
                    <span class="meta-value">Oct 1995 — Jul 1997</span>
                </div>
                <div class="meta-row">
                    <span class="meta-label">Personnages</span>
                    <span class="meta-value"><?= $personnagesCount[0]["total"] ?></span>
                </div>
                <div class="meta-row">
                    <span class="meta-label">Anges</span>
                    <span class="meta-value"><?= $angesCount[0]["total"] ?></span>
                </div>
                <div class="meta-row">
                    <span class="meta-label">Unités EVA</span>
                    <span class="meta-value"><?= $unitsCount[0]["total"] ?></span>
                </div>
            </div>

        </div>

        <div class="enter-btn-wrap">
            <a class="enter-btn" href="characters.php">Entrer dans la base de données</a>
        </div>

        <div class="bottom-line">
            <span>EVA-WIKI &nbsp; >System Initialized</span>
            <span>NERV &nbsp; HQ &nbsp;—&nbsp; Tokyo-3</span>
        </div>
    </section>
</body>

</html>
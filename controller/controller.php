<?php

require "model/model.php";

if ($page == "index") {
    require "view/view-index.php";
}
elseif ($page == "characters") {
    require "view/view-characters.php";
}
elseif ($page == "angels") {
    require "view/view-angels.php";
}
elseif ($page == "episodes") {
    require "view/view-episodes.php";
}
elseif ($page == "units") {
    require "view/view-units.php";
}
elseif ($page == "character-info") {
    require "view/view-character-info.php";
}
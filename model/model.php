<?php
function connexionBDD()
{
  try // Connexion à la base de données
  {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $database = new PDO('mysql:host=localhost;dbname=nge_db', 'root', '', $options);
  } catch (Exception $err) {
    die('Erreur connexion MySQL : ' . $err->getMessage());
  }
  return $database;
}

function getTableTotal($table) {
  $database = connexionBDD();

  $req = $database->query("SELECT COUNT(*) AS total FROM $table");
  $result = $req->FetchAll(PDO::FETCH_ASSOC);

  $database = null;
  return $result;
}

function getUnitTotal() {
  $database = connexionBDD();

  $req = $database->query("SELECT COUNT(DISTINCT nom_unit) AS total FROM personnages WHERE nom_unit IS NOT NULL;");
  $result = $req->FetchAll(PDO::FETCH_ASSOC);

  $database = null;
  return $result;
}
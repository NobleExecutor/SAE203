<?php

// Fonction de connexion à la base de données
function connexionBDD() {
  try {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $database = new PDO('mysql:host=localhost;dbname=nge_db', 'root', '', $options);
  } 
  
  catch (Exception $err) {
    die('Erreur connexion MySQL : ' . $err->getMessage());
  }
  
  return $database;
}

// Fonction qui retourne le nombre d'occurences dans une table passée en paramètre
function getTableTotal($table) {
  $database = connexionBDD();

  $req = $database->query("SELECT COUNT(*) AS total FROM $table");
  $result = $req->FetchAll(PDO::FETCH_ASSOC);

  $database = null;
  return $result;
}

// Fonction qui retourne le nombre d'unité EVA distincte
function getUnitTotal() {
  $database = connexionBDD();

  $req = $database->query("SELECT COUNT(DISTINCT nom_unit) AS total FROM personnages WHERE nom_unit IS NOT NULL;");
  $result = $req->FetchAll(PDO::FETCH_ASSOC);

  $database = null;
  return $result;
}

// Fonction qui retourne un set de données basé sur une requète passée en paramètre
function getAllEntries($query) {
  $database = connexionBDD();

  $req = $database->query($query);
  $result = $req->FetchAll(PDO::FETCH_ASSOC);

  $database = null;
  return $result;
}

// Fonction qui permet d'ajouter un commentaire à la base de données
function addComment($pseudo, $commentaire) {
  $database = connexionBDD();

  $req = $database->exec("INSERT INTO commentaires (id_commentaire, pseudo, commentaire, date)
  VALUES (NULL, '$pseudo', '$commentaire', NOW());");
  // NOW() permet de stocker la date et le temps exact à laquelle la requête est faite

  // On echo une balise script pour pouvoir log le résultat de la requête dans la console (plus pratique)
  if ($req == 1)
    echo "<script>console.log('Insertion dans la BDD réussie')</script>";
  else
    echo "<script>console.log('Erreur lors de l'insertion du commentaire dans la BDD')</script>";
  $database = null;
  }
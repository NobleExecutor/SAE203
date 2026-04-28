<?php
function connexionBDD()
{
  try // Connexion à la base de données
  {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $database = new PDO('mysql:host=localhost;dbname=magasin', 'root', '', $options);
  } catch (Exception $err) {
    die('Erreur connexion MySQL : ' . $err->getMessage());
  }
  return $database;
}
<?php
// paramètres de connexions
const DB_HOST = "localhost";     //Le chemin vers le serveur (souvent localhost)
const DB_LOGIN = "root";        //Nom d'utilisateur pour se conecter
const DB_PWD = "";               //Mot de passe pour se connecter
const DB_NAME = "listepays";    //Nom de la base de données
const DB_PORT = 3307;           //Chemin vers le port
const DB_CHARSET = "utf8mb4";   //charset

// paramètres supplémentaires pour PDO
const DB_TYPE = "mysql"; // valable pour MySQL et/ou MariaDB
const MY_PAGINATION_GET = "pg";
const MY_PAGINATION_BY_PAGE = 50;
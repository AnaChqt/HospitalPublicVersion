<?php
// Connecter phpmyadmin au php
define('DSN','mysql:dbname=hospitale2n;charset=utf8;host=127.0.0.1');
define('USER','HospitalUser');
define('PASSWORD','4S(ZsBcKxKuRKMY/');

// Permet de définir les pages avec les différentes erreurs
define('ERROR_ARRAY',[
    '0' => 'erreur générique',
    '1'=> 'Vous n\'etes pas connecté à la base de donnée',
    '2'=> 'erreur 2'
]);
<?php
// Regex pour le nom et prénom 
define('REGEX_NAME', "^[a-zA-Zïëüÿöçâéèñôáóøšşćĕłăčőřžåķņńžůãşœæę '\-]*$");

// Regex pour la date de naissance et la date
define('REGEX_DATE', "^([0-9]{4})[\/\-]?([0-9]{2})[\/\-]?([0-9]{2})");

// Regex pour le téléphone (Accompagner l'utilisateur pour lui dire comment remplir son numéro de tel)
define('REGEX_PHONE', "^[0-9]{10}");

// Regex pour l'heure des rdv
define('REGEX_TIME',"^[0-9]{2}:[0-9]{2}");
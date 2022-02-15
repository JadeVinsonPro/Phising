<?php


class DAO
{

    // Variables
    private static $db = null; // Va servir à vérifier si la base de donnée est connectée ou non
    private static $host = 'localhost'; // Nom de l'hôte de la base de donnée (Hôte, c'est là en gros où est hébergée ta BDD)
    private static $name = 'essaie'; // Nom de la base de donnée
    private static $user = 'root'; // Nom d'utilisateur de la BDD, ici root (donc c'est un admin, il est créé de base)
    private static $pass = ''; // Mot de passe de la BDD, ici il n'y en a pas de défini de base.

    protected static function query($statement) {
        $stat = self::getPDO()->query($statement);

        return $stat->fetchAll();
    }

    protected static function getPDO() {
        if(is_null(self::$db)) {
            // On lance la connexion SQL en y mettant donc le nom d'hôte, le nom de la bdd, le nom de l'utilisateur et le mdp.
            $cnx = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$name . ';charset=utf8', self::$user, self::$pass);
            $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // C'est en gros, comment une erreur va être retournée.

            self::$db = $cnx; // On set la variable $db à '$cnx' pour dire que la connexion est désormais faites.
        }

        return self::$db; // Etant donné que '$db' est maintenant égale à '$cnx', on la retourne, pour qu'on puisse récupérer les infos PDO (de la bdd).
    }

}
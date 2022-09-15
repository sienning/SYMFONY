<?php
declare(strict_types=1); // Strict au niveau du type (sinon erreur)

class Singleton {
    /**
     * @var Singleton
     * @access private
     * @static
     */
    private static $myInstance = null;

    /**
     * Constructeur de la classe
     *
     * @param void
     * @return void
     */
    private function __construct() {
    }

    /**
     * Méthode qui crée l'unique instance de la classe
     * si elle n'existe pas encore puis la retourne.
     *
     * @param void
     * @return Singleton
     */
    public static function getInstance() {
        if(is_null(self::$myInstance)) {
            self::$myInstance = new Singleton();
        }

        return self::$myInstance;
    }
}

var_dump(Singleton::getInstance()===Singleton::getInstance());
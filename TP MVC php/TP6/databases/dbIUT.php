<?php

include_once(__DIR__.'/database.php');

/**
 * Accès à la base de données de l'IUT
 */
class DBIUT extends DataBase
{
    //Instance static du singleton
    private static $handle = null;

	/**
	 * Constructeur
	 */
	protected function __construct()
	{
		parent::__construct('localhost', 'grp-029', 'grp-029', 'XhUHVruX');
		parent::connect();
	}

    /**
     * Fonction static permettant de récupérer l'instance du singleton
     */
    public static function getInstance()
    {
        if(is_null(self::$handle))
            self::$handle = new DBIUT();

        return self::$handle;
    }
}
?>
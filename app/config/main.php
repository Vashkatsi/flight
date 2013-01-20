<?php

/**
 * Application config
 *
 * @author   Pavel Paschenko
 * @return   array
 */
return array(    

    'dbFactory' =>
        array(

            'db' => array(
                'class' => 'PDOWrapper',
                'connectionString' => 'mysql:host=127.0.0.1;port=3306;dbname=cdcol',
                'username' => 'root',
                'password' => '',
                'options' => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'),
                ),

            'db2' => array(
                'class' => 'PDOWrapper',
                'connectionString' => 'mysql:host=127.0.0.1;port=3306;dbname=calendar',
                'username' => 'root',
                'password' => '',
                'options' => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'),
            ),

	),
    'routes' =>
        array(
            '/' => array('\controllers\Index', 'start'),
            '/@name/@id:[0-9]+' => array('\controllers\Test','test'),
        ),
    /*
     * Initialize Cache
     *
     * use - Flight::cache()->setObject('obj', $obj, 100);
     * use - Flight::cache()->getObject('obj');
     *
    'cache' =>
        array(
            'class' => 'FileCache',
            'cache_dir' => 'app/cache',
        ),
    */
);
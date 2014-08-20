<?php
/**
 * Hipsterblog	2014 19/08/14
 * @author: Manuel Absalón Hernández Corzo
 * @email: manny@absa.me
 * @url: absa.me
 * Archivo de configuraciones principales de hipsterblog
 **/

if(!defined('in_hipster')) die( 'Denied Acces! absa:)' );

//Iniciar Sesión
session_start();

// Directorios
define('root', dirname(__FILE__));
define('ds', DIRECTORY_SEPARATOR);
define('system', root.ds.'system');
define('core', system.ds.'core');
define('themes', root.ds.'static'.ds.'themes');

//Variables de Ejecución
$hipster = array( 'theme' => 'default'
                 
                 
                );


$db = array( 'server' => 'localhost',
			 'user' => 'root',
			 'password' => 'inothipster',
			 'name' => 'hipsterblog');
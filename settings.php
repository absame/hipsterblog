<?php
/**
 * Hipsterblog	2014 19/08/14
 * @author: Manuel Absalón Hernández Corzo
 * @email: manny@absa.me
 * @url: absa.me
 * Archivo de configuraciones principales de hipsterblog
 **/

session_start();
define('in_hipster', true);
define('root', dirname(__FILE__));
define('ds', DIRECTORY_SEPARATOR);
define('system', root.ds.'system');
define('core', system.ds.'core');
define('themes', root.ds.'static'.ds.'themes');


$db = array( 'server' => 'localhost',
			 'user' => 'root',
			 'password' => 'inothipster',
			 'name' => 'hipsterblog');
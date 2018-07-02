<?php 
/** DEFINE TITULO PAGINA*/
define('TITULO', 'Indústria Bandeirante de Plásticos');
/** DEFINE NOME BARBEARIA */
define('NOME_BARBEARIA', 'Barber School');
/** DEFINE NOME BARBEARIA ABREVIADO */
define('NOME_BARBEARIA_AB', 'BS');
/** DEFINE DRIVER */
define('BD_DRIVER', 'mysql');
/** DEFINE BD */
define('BD_HOST', 'localhost');
/** DEFINE USER */
define('BD_USER', 'root');
/** DEFINE PWD */
define('BD_PWD', '');
/** DEFINE DB */
define('BD_DB', 'indbandeirante');

/** DEFININDO CAMINHO PARA A PASTA DO SYSTEM */
if( ! defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** DEFININDO URL **/
if( ! defined('BASEURL') )
	define('BASEURL',	'/BarbarProject/');


/** DEFININDO CAMINHO API BD */
if(! defined('DBAPI') )
	define('DBAPI', ABSPATH . 'include/Database.php');
/** TEMPLATES **/
define('HEADER_TEMPLATE', ABSPATH. 'include/header.php');
define('FOOTER_TEMPLATE', ABSPATH. 'include/footer.php');
define('MENU_TEMPLATE', ABSPATH. 'include/menu.php');

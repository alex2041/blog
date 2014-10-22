<?php
/* Пути по-умолчанию для поиска файлов */
set_include_path(get_include_path()
					.PATH_SEPARATOR.'application/controllers'
					.PATH_SEPARATOR.'application/models'
					.PATH_SEPARATOR.'application/views');

/* Имена файлов: views */
define('DEFAULT_FILE', '_default.php');
define('POST_ID_FILE', 'post_id.php');
define('POST_CAT_FILE', 'post_cat.php');
define('LOGIN', 'login.php');
define('ADM', 'adm.php');
define('PANEL', 'control.php');
define('PANEL_POST', 'post_adm.php');
define('PANEL_CAT', 'cat_adm.php');
define('UPDATE_POST', 'update_post.php');
define('UPDATE_CAT', 'update_cat.php');
define('UPDATE_BLOCK', 'update_block.php');
define('ADD_POST', 'add_post.php');
define('ADD_CAT', 'add_cat.php');
/* Автозагрузчик классов */
function __autoload($class){
	require_once($class.'.php');
}

/* Инициализация и запуск FrontController */
$front = FrontController::getInstance();
$front->route();

/* Вывод данных */
echo $front->getBody();
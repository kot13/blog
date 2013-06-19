<?php  
// Включаем ошибки и проверяем версию php
error_reporting (E_ALL);
if (version_compare(phpversion(), '5.1.0', '<') == true) { die ('PHP5.1 Only'); }
// Константы:
define ('DIRSEP', DIRECTORY_SEPARATOR);

// Узнаём путь до файлов сайта
$site_path = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP) . DIRSEP . 'blog' . DIRSEP;   // хрен пойми как указать путь так чтобы везде работало???
define ('site_path', $site_path);

// Запускаем файл инициализации - стартёр пыхапэ
include ('includes/starter.php'); 

// Подключаемся к базе
try {
	$db=new PDO(
		'mysql:host=localhost;dbname=blog;charset=utf-8',
		'admin',
		'12345'
	);
	$db->exec('SET CHARACTER SET utf8');
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $e){
	echo "<br/><br/><h1>Хьюстон, у нас проблемы.</h1><br/><br/>";       
	file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND); 
}

$registry->set ('db', $db); 

// Создаём объект шаблонов
$template = new Template($registry);
$registry->set ('view', $template);

// Загружаем router
$router = new Router($registry);
$registry->set ('router', $router);
$router->setPath (site_path . 'controllers');
$router->delegate();
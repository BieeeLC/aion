<?php
$config = array(
	// Данные для подключения к БД обвязки
	'hostWeb' => 'localhost',			// адрес базы данных
	'dbnameWeb' => 'pow',				// имя базы данных
	'userWeb' => '1234',				// логин
	'passWeb' => '1234',			// пароль

	// Данные для подключения к БД форума
	'hostForum' => 'localhost',			// адрес базы данных
	'dbnameForum' => 'forum',			// имя базы данных
	'userForum' => '1234',				// логин
	'passForum' => '1234',			// пароль
	'prefixForum' => '',				// префикс таблиц

	// Данные для подключения к БД логинсервера
	'hostLs' => '',			// адрес базы данных
	'dbnameLs' => 'al_server_ls',			// имя базы данных
	'userLs' => '1234',					// логин
	'passLs' => '1234',				// пароль

	// Данные для подключения к БД геймсервера
	'hostGs' => 'localhost',			// адрес базы данных
	'dbnameGs' => 'al_server_gs',			// имя базы данных
	'userGs' => '1234',					// логин
	'passGs' => '1234',				// пароль

	// Общие настройки
	'url' => 'http://aion.ru/',			// адрес главной страницы (слэш на конце обязателен)
	'theme' => 'light',					// название темы
	'lang' => 'ru',						// язык сайта
	'caching' => 'CFileCache',			// кеширование (CFileCache - файлы, CDbCache - SQLite, CDummyCache - отключено)
);

$params = array(
	'lsIp' => 'localhost',				// ip адрес логин-сервера
	'lsPort' => '2106',					// порт логин-сервера
	'gsIp' => 'localhost',				// ip адрес гейм-сервера
	'gsPort' => '7777',					// порт гейм-сервера
);
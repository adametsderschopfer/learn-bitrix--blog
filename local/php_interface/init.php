<?php

// autoload
require_once __DIR__ . '/include/autoload.php';

// функции для разработчика
require_once __DIR__ . '/include/functions.php';

define('SITE_TEMPLATE_DEFAULT', '/local/templates/.default');

/*
 * Событие в выполняемой части пролога сайта
 * Обработчик активирует API
 */
AddEventHandler('main', 'OnBeforeProlog', ['\ADDesign\Events\Main', 'initApi']);

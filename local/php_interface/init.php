<?php

// autoload
require_once __DIR__ . '/include/autoload.php';

// функции для разработчика
require_once __DIR__ . '/include/functions.php';

/*
 * Событие в выполняемой части пролога сайта
 * Обработчик активирует API
 */
AddEventHandler('main', 'OnBeforeProlog', ['\ADDesign\Events\Main', 'initApi']);

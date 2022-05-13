<?php


declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('DEBUG LOGGER');
$logger->pushHandler(new StreamHandler(__DIR__ . '/logs/debug/log', Logger::DEBUG));

$criticallogger = new Logger('CRITICAL LOGGER');
$criticallogger->pushHandler(new StreamHandler(__DIR__ . '/logs/critical/log', Logger::CRITICAL));
try {
    $logger->debug('Debug message', array('user' => 'admin', 'time' => date('H:i:s d.m.Y')));

    $criticallogger->critical('Critical error', array('errors' => 'messager-1', 'time' => date('H:i:s d/m/Y')));
} catch (Exception $exception) {
    print(sprintf('ошибка: %s', $exception->getMessage()) . PHP_EOL);
    print(sprintf('тип: %s', get_class($exception)) . PHP_EOL);
    print(sprintf('trace: %s', $exception->getTraceAsString()) . PHP_EOL);
}

//var_dump($_POST);
/**
 * @param float $_POST ['vehicle_value']
 */

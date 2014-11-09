<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 14-11-9
 * Time: 下午10:33
 */


define('DS', DIRECTORY_SEPARATOR);
require dirname(__FILE__) . DS . 'vendor' . DS . 'autoload.php';


$daemon = new \Jenner\Zebra\Daemon\Daemon();
$daemon->daemonize();

$daemon_single = new \Jenner\Zebra\Daemon\DaemonSingle(__FILE__);
$daemon_single->single();
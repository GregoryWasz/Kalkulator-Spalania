<?php
$conf->root_path = dirname(__FILE__);
// dlatego, że korzystam z MAMP używam portu 8888
$conf->server_name = 'localhost:8888';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/Spalanie';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_root = $conf->app_root.'/ctrl.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;
?>

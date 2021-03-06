<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcShow','CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('login','LoginCtrl');
getRouter()->addRoute('logout','LoginCtrl', ['user','admin']);
getRouter()->addRoute('outcome', 'OutcomeCtrl', ['user','admin']);
getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';

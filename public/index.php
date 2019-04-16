<?php
ini_set("display_errors", true);
require '../app/Console/Kernel.php';
require '../app/Console/Functions.php';
require '../app/Console/Config.php';
require '../app/Console/Controller.php';
require '../app/Console/ModelDB.php';
require '../app/Console/Layout.php';

$init = new Kernel();
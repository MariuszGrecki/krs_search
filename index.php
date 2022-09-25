<?php

declare(strict_types=1);
namespace App;
use Controller\Controller;

require_once("src/Controller.php");

$request = [
  'get' => $_GET,
  'post' => $_POST
];


$controller = new Controller($request);
$controller->run(); 


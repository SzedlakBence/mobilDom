<?php
require_once 'MobileRestHandler.php';

//print_r($_GET);
$view = "";
if(isset($_GET['view']))
{
    $view=$_GET['view'];
}

// Restful service URL mapping via $_GET

swich($view)
{
   
}
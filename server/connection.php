<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function checkUrlProtocol($url)
{
    $parsedUrl = parse_url($url);
    return isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : 'invalid';
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");

// Determine if online or offline
$isLocalhost = ($_SERVER['HTTP_HOST'] === 'localhost');

// Database connection (Only use one based on environment)


if ($isLocalhost) {
    // Offline (Localhost)
    $domain = "http://localhost/car_engine/";

    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "car_engine");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

  
} else {
    // Online (Live Server)
    $domain = "https://josemaka.com/";

    define("USER", "josemaka_car_engines");
    define("PASSWORD", "josemaka_car_engines");
    define("DATABASE", "josemaka_car_engines");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
}







$host = 'mail.josemaka.com';
$sitename = "Josemaka";
$site_email = "lijezzy4real@yahool.com";
$sitephone_number = "+244 928 602 665";
$siteaddress = "Rua 17 setembro Bairro golf 1 ao lado do Hospital Avokumbi Kilamba Kiaxi Luanda-Angola  <br> Loja Zona A 21";
$siteshortaddress = 'Avokumbi Kilamba Kiaxi luandam-Angola';

session_start();
?>
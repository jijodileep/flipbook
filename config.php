<?php
session_status() === PHP_SESSION_ACTIVE ?: session_start();
$base_url = "http://localhost/flipbook/"; 

$base_url = "https://flair.premiumnaseem.com/";
$banner ="https://crm.33holdings.in/UploadedFiles/flair/";
$db = new MysqliDb('82.180.145.161', 'abm4crmdotnet', '$^sdhdb34A#e', 'abm4crm');
require_once 'vendor/autoload.php';  
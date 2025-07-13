<?php
require_once __DIR__ . '/../app/Controllers/PageController.php';

$page = $_GET['page'] ?? 'about';

$controller = new PageController();
$controller->render($page);

<?php
use GenreController;
use AuthorController;
$page = $_GET['page'] ?? '';

switch ($page) {
    case 'genre':
        require_once './controller/GenreController.php';
        $controller = new GenreController();
        $controller->index();
        break;
    case 'author':
        require_once './controller/AuthorController.php';
        $controller = new AuthorController();
        $controller->index();
        break;
    default:
        echo "<h1>404 - Page Not Found</h1>";
        break;
}

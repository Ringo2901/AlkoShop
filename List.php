<?php
require_once 'vendor/autoload.php'; // Подключение библиотеки Twig

// Создание экземпляра шаблонизатора Twig
$loader = new \Twig\Loader\FilesystemLoader('templates'); // указание папки с шаблонами
$twig = new \Twig\Environment($loader);

// Замена меток на значения
$title = "Наливайка";
$url = 'products.html.twig';
// Отображение шаблона с замененными метками
echo $twig->render("base.html.twig", [
    'title' =>$title,
    'url' =>$url
]);
?>
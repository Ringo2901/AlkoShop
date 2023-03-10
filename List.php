<?php
require_once 'vendor/autoload.php'; // Подключение библиотеки Twig

// Создание экземпляра шаблонизатора Twig
$loader = new \Twig\Loader\FilesystemLoader('templates'); // указание папки с шаблонами
$twig = new \Twig\Environment($loader);

// Замена меток на значения
$title = "Наливайка";
$url = 'products.html.twig';
$products = [
    [
        'image' => 'images/wine.jpeg',
        'title' => 'Вино "Chateau Lafite Rothschild"',
        'price' => '500 руб.',
        'description' => 'Chateau Lafite Rothschild - красное сухое вино, произведенное на винодельческом предприятии Chateau Lafite Rothschild во Франции.'
    ],
    [
        'image' => 'images/main2.jpg',
        'title' => 'Ликёр "JAGERMEISTER"',
        'price' => '300 руб.',
        'description' => 'Именно Курт Маст, сын Вильгельма Маста, повернул семейное производство уксуса в другом направлении. Несколько лет прошло, прежде чем он получил идеальный рецепт Jagermeister из 56 ингредиентов, но мы считаем, что ожидание того стоило.'
    ]
];


// Отображение шаблона с замененными метками
echo $twig->render("base.html.twig", [
    'title' =>$title,
    'url' =>$url,
    'products' => $products
]);
?>
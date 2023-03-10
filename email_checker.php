<?php
function validate_email($email) {
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($pattern, $email);
}

// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['email'];

if (validate_email($email)) {
    $file = 'emails.txt';
    $data = $name . ',' . $email . PHP_EOL;
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
}
?>
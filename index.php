<?php

require_once __DIR__ . '/vendor/autoload.php';

$output = new \MathApps\Output(7);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>MathApps</title>
</head>
<body>
    <?= $output->print() ?>
</body>
</html>


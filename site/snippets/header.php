<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offstimme</title>
    <?= vite()->client() ?>
    <?= vite()->css() ?>
</head>
<body>

<header class="bg-blue-400 <?= ($fullHeight ? 'h-screen' : 'h-48') ?>">
    <a href="">
        <?= svg('assets/svg/logo_horizontal.svg') ?>
    </a>
</header>
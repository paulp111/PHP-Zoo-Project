<?php
if (!isset($cssFilePath)) {
    $cssFilePath = '../assets/css/pico.fluid.classless.yellow.min.css'; // Adjusted path for the views directory
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= $cssFilePath ?>" type="text/css">
    <link rel="stylesheet" href="/zoo_project/assets/css/index.css" type="text/css"> <!-- Ensure this path is correct -->
    <title>Zoo Project</title>
</head>
<body>
<header>
    <h1>Zoo</h1>
</header>

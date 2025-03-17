<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require_once("fonction.php");
    require_once("fonction.php");
    ?>


    <?php


    // require "fonction.php";

    // echo somme(20, 20);

    ?>

    <?php
    $countries = ["Sénégal", "Gambie", "Benin", "Togo"];
    ?>

    <?php foreach ($countries as $country) : ?>

        <h1><?php echo $country; ?></h1>

    <?php endforeach; ?>

    <?php for ($i = 0; $i < count($countries); $i++) : ?>

        <h1 style="color: green;"><?php echo $countries[$i]; ?></h1>

    <?php endfor; ?>

    <?php
    $age = 12;
    ?>

    <?php if ($age >= 18) { ?>


        <h1 style="color: green;">Vous êtes majeur</h1>

    <?php } else { ?>

        <h1 style="color: red;">Vous êtes mineur</h1>

    <?php } ?>


    <?php if ($age >= 18) : ?>


        <h1 style="color: green;">Vous êtes majeur</h1>

    <?php else : ?>

        <h1 style="color: red;">Vous êtes mineur</h1>

    <?php endif; ?>

</body>

</html>
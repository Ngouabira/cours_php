<?php
session_start();

if (isset($_SESSION['name'])) {

    echo $_SESSION['name'];
    echo $_SESSION['age'];
}


if (isset($_COOKIE['name'])) {

    echo $_COOKIE['name'];
}

if (isset($_COOKIE['age'])) {
    echo $_COOKIE['age'];
}

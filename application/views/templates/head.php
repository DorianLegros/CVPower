<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(current_url() == "http://[::1]/cvpower/login") echo "Connexion"; else echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php if(validation_errors() && current_url() != "http://[::1]/cvpower/login") { echo "../";} ?>css/style.css">
    <link rel="shortcut icon" type="image/png" href="<?php if(validation_errors()) { echo "../";} ?>sass/img/logo-blue.png">
</head>

<body>
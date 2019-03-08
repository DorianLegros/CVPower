<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modification du mot de passe</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/png" href="../sass/img/logo-blue.png">
</head>

<body>

<div class="top">

    <div class="logo-box">
        <a href="../home"><img src="../img/logo.png" alt="logo" class="logo"></a>
    </div>
<div class="text-box">
    <h2 class="heading-primary">
        <span class="heading-primary-main">Mot de passe</span>
    </h2>
</div>
</div>
<div class="middle">

            <form class="form-card" method="post">
                <fieldset class="form-fieldset">
                    <legend class="form-legend">Changement de mot de passe</legend>

            <div class="form-element form-input">
                <input class="form-element-field"   type = "password" name = "pwd1" placeholder="Votre mot de passe" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="username">Nouveau mot de passe</label>
                <?php echo form_error('pwd1', '<p class="error">', '</p>') ?>
            </div>
            <div class="form-element form-input">
                <input class="form-element-field"   type = "password" name = "pwd2" placeholder="Votre mot de passe" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="username">Répéter mot de passe</label>
                <?php echo form_error('pwd2', '<p class="error">', '</p>') ?>
            </div>
                </fieldset>

            <div class="form-actions">
                <input type="submit" class="form-btn" value="Envoyer">
            </div>
            </form>
</div>

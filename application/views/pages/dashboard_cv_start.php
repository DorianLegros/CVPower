<?php
/**
Ajout du nom et description du cv
 * insert CV
 * update CV
 */

?>

<body>

<h1><?php echo $title; ?></h1>


<form action="" method="post">
    <label for="lastname">Nom</label>
    <input type="text" name="lastname">

    <label for="name">Prenom</label>
    <input type="text" name="name">

    <label for="phone">Tel</label>
    <input type="number" name="phone">

    <input type="submit" value="Envoyer">
</form>
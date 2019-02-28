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
    <?= form_error('name') ?>
    <label for="name">Nom du CV</label>
    <input type="text" name="name" value="<?php if(!empty($_POST['name'])){echo $_POST['name'];} ?>">

    <?= form_error('description') ?>
    <label for="description">Description du CV</label>
    <textarea name="description" maxlength="255"><?php if(!empty($_POST['description'])){echo $_POST['description'];} ?></textarea>

    <input type="submit" value="Envoyer">
</form>
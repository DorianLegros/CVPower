<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="top">

    <div class="logo-box">
        <img src="img/logo.png" alt="logo" class="logo">
    </div>


    <div class="text-box">
        <h2 class="heading-primary">
            <span class="heading-primary-main">Connexion</span>
        </h2>
    </div>
</div>
<div class="middle">

    <form class="form-card" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Connexion</legend>
            <?php if (isset($error)) : ?>
                <div class="error">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <div class="form-element form-input">
                <input type="text" class="form-element-field" id="mail" name="mail" placeholder="Votre adresse e-mail">
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="username">Adresse mail</label>
                <?php echo form_error('mail', '<p class="error">', '</p>') ?>
            </div>


            <div class="form-element form-textarea">
                <input type="password" class="form-element-field" id="pwd" name="pwd" placeholder="Votre mot de passe">
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm">Mot de passe</label>
                <?php echo form_error('pwd', '<p class="error">', '</p>') ?>
            </div>
            <div class="form-group">
                <a href="email">Mot de passe oublié ?</a>
            </div>
        </fieldset>
        <div class="form-actions">
                <input type="submit" class="form-btn" value="Connexion">
        </div>
    </form>


</div>

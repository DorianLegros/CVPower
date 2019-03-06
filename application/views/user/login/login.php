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
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Login</h1>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="username">Nom d'utilisateur</label>
					<input type="text" class="form-control" id="mail" name="mail" placeholder="Votre nom d'utilisateur">
				</div>
				<div class="form-group">
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Votre mot de passe">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Connexion">
				</div>
                <div class="form-group">
                    <a href="email">Reset de mot de passe</a>
                </div>
			</form>
		</div>

<div class="middle">

    <form class="form-card">
        <fieldset class="form-fieldset">

            <legend class="form-legend">Connexion</legend>

            <div class="form-element form-input">
                <input class="form-element-field" placeholder="" type="input" required/>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="username">Adresse mail</label>
            </div>


            <div class="form-element form-textarea">
                <textarea id="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm" class="form-element-field" placeholder=""></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm">Mot de passe</label>
            </div>

        </fieldset>
        <div class="form-actions">
            <button id="button" data-name="dashboard.html" class="form-btn" type="button">Se Connecter</button>
        </div>
    </form>


</div>

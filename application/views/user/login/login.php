<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
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
					<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Votre nom d'utilisateur">
				</div>
				<div class="form-group">
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Votre mot de passe">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Connexion">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->
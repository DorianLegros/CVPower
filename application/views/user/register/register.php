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
				<h1>Register</h1>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="email">Mail</label>
					<input type="email" class="form-control" id="mail" name="mail" placeholder="Enter your email">
					<p class="help-block">Une adresse mail valide</p>
				</div>
				<div class="form-group">
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter a password">
					<p class="help-block">Au moins 6 caractères</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirmez votre mot de passe</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
					<p class="help-block">Doit correspondre a votre mot de passe</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Inscription">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->
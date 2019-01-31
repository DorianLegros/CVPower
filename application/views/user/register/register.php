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
					<label for="username">Username</label>
					<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter a username">
					<p class="help-block">Au moins 4 caractères, lettres et chiffres seulement</p>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="user_email" placeholder="Enter your email">
					<p class="help-block">Une adresse mail valide</p>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="user_password" placeholder="Enter a password">
					<p class="help-block">Au moins 6 caractères</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm password</label>
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
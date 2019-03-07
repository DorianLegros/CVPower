<div class="text-box">
    <h2 class="heading-primary">
        <span class="heading-primary-main">Connexion</span>
    </h2>
</div>
</div>
<div class="middle">

<?php
echo $this->session->flashdata('email_sent');
?>
    <form class="form-card"  onsubmit="return alert('Votre email a bien été envoyé, vérifiez votre boîte mail !')" action="Sendingemail_Controller/send_mail" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Mot de passe oublié</legend>
            <div class="form-element form-input">
                <input class="form-element-field" type = "email" name = "email" placeholder="Votre adresse e-mail" required />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="username">Adresse mail</label>
            </div>

        </fieldset>
        <div class="form-actions">
            <input class="form-btn" type = "submit" value = "SEND MAIL">
        </div>
    </form>
</div>


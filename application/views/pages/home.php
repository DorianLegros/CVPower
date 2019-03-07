<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


    <link rel="stylesheet" href="<?php if(validation_errors()) { echo "../";} ?>sass/css/style.css">
    <link rel="shortcut icon" type="image/png" href="<?php if(validation_errors()) { echo "../";} ?>sass/img/logo-blue.png">
    <title>CV Power</title>
</head>
<body>
<!--<div class="navigation">
  <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
  <label for="navi-toggle" class="navigation__button">
      <span class="navigation__icon">&nbsp;</span>
  </label>
  <div class="navigation__background">&nbsp;</div>
<nav class="navigation__nav">
      <ul class="navigation__list">
          <li class="navigation__item"><a href="#form" class="navigation__link">S'inscrire</a></li>
          <li class="navigation__item"><a href="#" class="navigation__link">Se connecter</a></li>

          <li class="navigation__item"><a href="#" class="navigation__link">About CV Power</a></li>
          <li class="navigation__item"><a href="#" class="navigation__link">About CV Power</a></li>

      </ul>
  </nav>-->
</div>

<header class="header">
    <div class=" header__logo-box">
        <img src="<?php if(validation_errors()) { echo "../";} ?>img/logo.png" alt="Logo" class="header__logo">
    </div>

    <div class="header__text-box">
        <h1 class="heading-primary">
            <span class="heading-primary--main">CV POWER</span>
            <span class="heading-primary--sub">Créer votre CV professionnel en ligne.</span>
        </h1>

        <a href="#form" class="btn btn--white btn--animated">Créer Mon CV</a>
    </div>
</header>

<main>
    <section class="section-about">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Choisissez votre modèle préféré
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-2">
                <h3 class="heading-tertiary u-margin-bottom-small">Transformer dès maintenant votre CV</h3>
                <p class="paragraph">
                    Oubliez les heures passées à mettre en page votre CV ou à choisir des polices qui mettent en valeur votre lettre de motivation. L’outil de création en ligne gratuit de CVPower vous permet de créer un CV élégant et attractif sans vous compliquer la vie.
                    Choisissez votre modèle préféré parmi notre sélection moderne et entièrement personnalisable et générez votre CV en format PDF prêt à candidater.
                </p>

                <h3 class="heading-tertiary u-margin-bottom-small">Coté recruteur</h3>
                <p class="paragraph">
                    Approuvés par les recruteurs, nos modèles sont précisément élaborés pour améliorer la présentation et la lisibilité de votre CV.
                </p>
                <!--  <a href="#" class="btn-text">à lire &rarr;</a> -->
            </div>
            <div class="col-1-of-2">
                <div class="composition">
                    <img src="<?php if(validation_errors()) { echo "../";} ?>sass/img/CV1.png" alt="Photo 1" class="composition__photo composition__photo--p1">
                    <img src="<?php if(validation_errors()) { echo "../";} ?>sass/img/CV2.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                    <img src="<?php if(validation_errors()) { echo "../";} ?>sass/img/CV3.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                </div>
            </div>
        </div>
    </section>

    <section class="section-features">

        <div class="row">
            <div class="col-1-of-4">
                <div class="feature-box">
                    <h3 class="heading-tertiary u-margin-bottom-small">Inscription</h3>
                    <p class="feature-box__text">
                        Vous vous inscrivez et créez un compte  depuis la page d'accueil en remplissant le formulaire d'inscription.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box">
                    <h3 class="heading-tertiary u-margin-bottom-small">Création de CV</h3>
                    <p class="feature-box__text">
                        Remplissez et validez les différents  formulaires nécéssaires pour avoir un CV complet prêt à être utiliser.
                    </p>
                </div>

            </div>

            <div class="col-1-of-4">
                <div class="feature-box">
                    <h3 class="heading-tertiary u-margin-bottom-small">Côté recruteur</h3>
                    <p class="feature-box__text">
                        Votre CV s'affiche directement coté recruteur et augmente  vos chances de trouver un emploi.
                    </p>
                </div>

            </div>

            <div class="col-1-of-4">
                <div class="feature-box">
                    <h3 class="heading-tertiary u-margin-bottom-small">Votre CV en PDF</h3>
                    <p class="feature-box__text">
                        Avoir votre CV en format PDF et pouvoir le télécharger pour postuler à d'autres offres d'emplois.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="section-stories">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Ils sont les mieux placés pour en parler
            </h2>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="<?php if(validation_errors()) { echo "../";} ?>sass/img/photo1.jpg" alt="Person on a tour" class="story__img">
                    <figcaption class="story__caption">
                        Mina BENREBIA
                    </figcaption>

                </figure>

                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">Cet outil m'a sauvé la vie</h3>
                    <p>Simple, intuitif et gratuit ! Bon outil pour les personnes qui ne sont pas à l'aise avec le traitement de texte,
                        pour moi c'est l'application la plus complète pour la création et la mise en forme des CV...Merci CVPower </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="<?php if(validation_errors()) { echo "../";} ?>sass/img/photo2.jpg" alt="Person on a tour" class="story__img">
                    <figcaption class="story__caption">
                        Dorian Legros
                    </figcaption>
                </figure>

                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">Application au top</h3>
                    <p>Il y a énormément de sites pour faire des CV sur internet mais celui-ci se démarque des autres par sa facilité d'utilisation, joli rendu et possibilité de moduler son CV comme on le souhaite. Le tout en étant gratuit !</p>
                </div>
            </div>
        </div>
        <!--
        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn-text">Read all stories &rarr;</a>
        </div>
        -->
    </section>

    <section class="section-book" id="form">
        <div class="row">
            <div class="book">
                <div class="book__form">
                    <form action="<?php if(!validation_errors()) { echo "User/";} ?>register" class="form" method="post">
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Créer Mon CV
                            </h2>
                        </div>

                        <div class="form__group">
                            <input type="text" name="mail" class="form__input" placeholder="Adresse Mail" id="email">
                            <label for="mail" class="form__label">Adresse Mail</label>
                            <?php echo form_error('mail', '<p class="error">', '</p>') ?>
                        </div>

                        <div class="form__group">
                            <input type="password" name="pwd" class="form__input" placeholder="Mot de passe" id="password">
                            <label for="pwd" class="form__label">Mot de passe</label>
                            <?php echo form_error('pwd', '<p class="error">', '</p>') ?>
                        </div>

                        <div class="form__group">
                            <input type="password" name="password_confirm" class="form__input" placeholder="Confirmation Mot de passe" id="password2" >
                            <label for="password_confirm" class="form__label">Confirmation Mot de passe</label>
                            <?php echo form_error('password_confirm', '<p class="error">', '</p>') ?>

                        </div>

                        <div class="form__group">
                            <input type="checkbox" class="form-checkbox-field" name="check">
                            <i class="form-checkbox-button"></i>
                            <span>J'ai lu et j'accepte les <a href="">Conditions générales d'utilisation</a></span>
                            <?php echo form_error('check', '<p class="error">', '</p>') ?>
                        </div>


                        <div class="form__group">
                            <input type="submit" class="btn btn--blue" value="S'inscrire">
                            <input type="button" class="btn btn--blue" value="Connexion" onclick="window.location='<?php if(validation_errors()){echo "../";} ?>login';">
                            <!--<a href="login" class="btn btn--blue">Connexion</a>-->
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

</main>

<footer class="footer">
    <div class="footer__logo-box">
        <img src="<?php if(validation_errors()) { echo "../";} ?>img/logo.png" alt="full logo" class="footer__logo">
    </div>

    <div class="row">

        <div class="col-1-of-2">
            <div class="footer__navigation">
                <ul class="footer__list">
                    <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                </ul>
            </div>
        </div>

        <div class="col-1-of-2">
            <p class="footer__copyright">
                A propos de nous:
                L'aventure CVPower a débuté en février 2019 lorsque les quatres membres de groupe étudiaient à la Nfactory School
            </p>
        </div>

    </div>
</footer>


</body>
</html>
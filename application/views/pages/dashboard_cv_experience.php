<body>

<div class="top">

    <div class="logo-box">
        <img src="img/logo.png" alt="logo" class="logo">
    </div>


    <div class="text-box">
        <h2 class="heading-primary">
            <span class="heading-primary-main">Experience</span>
            <span class="heading-primary-sub">Etape 2 </span>
        </h2>

        <div class="step-number">
            <img src="img/1.png" alt="" class="step-number1">
            <img src="img/2a.png" alt="" class="step-number2">
            <img src="img/3.png" alt="" class="step-number3">
            <img src="img/4.png" alt="" class="step-number4">
            <img src="img/5.png" alt="" class="step-number5">
        </div>
    </div>
</div>

<div class="middle">

    <form class="form-card" onsubmit="return sure()" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementExperience" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une expérience</legend>

            <div class="form-element form-input">
                <input name="job" id="exp_metier" class="form-element-field" placeholder="Remplir avec un metier" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_metier">Métier</label>
                <?php echo form_error('job', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-input">
                <input name="company" id="exp_entreprise" class="form-element-field" placeholder="Remplir avec l'entreprise lié à ce metier" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_entreprise">Entreprise</label>
                <?php echo form_error('name', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-input">
                <input id="exp_debut" class="form-element-field" placeholder="Remplir avec la date du début" type="date" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_debut">Date début</label>
            </div>

            <div class="form-element form-input">
                <input id="exp_fin" class="form-element-field" placeholder="Remplir avec la date de fin" type="date" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_fin">Date de fin</label>
            </div>

            <div class="form-element form-textarea">
                <textarea name="desc" id="exp_description" class="form-element-field" placeholder="Ce que cette expérience vous a apporté"></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_description">Description</label>
                <?php echo form_error('desc', '<p class="error">', '</p>') ?>
            </div>

        </fieldset>
        <div class="form-actions">
            <button id="button" data-name="formation.html" class="form-btn" type="button">Suivant</button>
            <button class="form-btn-cancel -nooutline" name="submitted" type="submit">Ajouter experience</button>
        </div>
    </form>
</div>

<div class="tableau">
    <table>
        <thead>
        <tr>
            <th>Metier</th>
            <th>Entreprise</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Description</th>
            <th>Supprimer</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td><strong>Metier</strong></td>
            <td>Entreprise</td>
            <td>01/08/2018</td>
            <td>01/08/2018</td>
            <td>Blablabla bla</td>
            <td><a class="" ><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
        </tr>
        <tr>
            <td><strong>Metier</strong></td>
            <td>Entreprise</td>
            <td>01/08/2018</td>
            <td>01/08/2018</td>
            <td>Blablabla bla</td>
            <td><a class="" ><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>

        </tr>
        <tr>
            <td><strong>Metier</strong></td>
            <td>Entreprise</td>
            <td>01/08/2018</td>
            <td>01/08/2018</td>
            <td>Blablabla bla</td>
            <td><a class="" ><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>

        </tr>
        </tbody>
    </table>

</div>

<div class="bottom">

</div>
<div class="clear"></div>

<script type='text/javascript' src='js/script.js'></script>
</body>

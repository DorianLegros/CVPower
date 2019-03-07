
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
    <form class="form-card" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementExperience" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une expérience</legend>

            <div class="form-element form-input">
                <input name="job" id="exp_metier" class="form-element-field" value="<?php if(!empty($_POST['job'])) {echo $_POST['job'];} ?>" placeholder="Remplir avec un metier" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_metier">Métier</label>
                <?php echo form_error('job', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-input">
                <input name="company" id="exp_entreprise" class="form-element-field" value="<?php if(!empty($_POST['company'])) {echo $_POST['company'];} ?>" placeholder="Remplir avec l'entreprise lié à ce metier" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_entreprise">Entreprise</label>
                <?php echo form_error('company', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-input">
                <input name="yearbegin" id="exp_debut" class="form-element-field" value="<?php if(!empty($_POST['yearbegin'])) {echo $_POST['yearbegin'];} ?>" placeholder="Remplir avec la date du début" type="date" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_debut">Date de début</label>
                <?php echo form_error('yearbegin', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-input">
                <input name="yearend" id="exp_fin" class="form-element-field" value="<?php if(!empty($_POST['yearend'])) {echo $_POST['yearend'];} ?>" placeholder="Remplir avec la date de fin" type="date" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_fin">Date de fin</label>
                <?php echo form_error('yearend', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-textarea">
                <textarea name="desc" id="exp_description" class="form-element-field" placeholder="Ce que cette expérience vous a apporté"><?php if(!empty($_POST['desc'])) {echo $_POST['desc'];} ?></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_description">Description</label>
                <?php echo form_error('desc', '<p class="error">', '</p>') ?>
            </div>

        </fieldset>
        <div class="form-actions">
          <button id="button" class="form-btn" type="button"><a href="<?php if(validation_errors()){ echo "../";} ?>step3-create">Suivant</a></button>
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
        <?php foreach ($liste as $value){ ?>
        <tr>
            <td><strong><?= $value['name_job'] ?></strong></td>
            <td><?= $value['compagny'] ?></td>
            <td><?= $value['beginning'] ?></td>
            <td><?= $value['ending'] ?></td>
            <td><?= $value['description'] ?></td>
            <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionExperience/<?= $value['id'] ?>/f"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

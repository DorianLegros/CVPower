    <div class="text-box">
        <h2 class="heading-primary">
            <span class="heading-primary-main">Formation</span>
            <span class="heading-primary-sub">Etape 3 </span>
        </h2>

        <div class="step-number">
            <img src="img/1.png" alt="" class="step-number1">
            <img src="img/2.png" alt="" class="step-number2">
            <img src="img/3a.png" alt="" class="step-number3">
            <img src="img/4.png" alt="" class="step-number4">
            <img src="img/5.png" alt="" class="step-number5">
        </div>
    </div>
</div>

<div class="middle">

    <form class="form-card" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementEducation" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une formation</legend>

            <div class="form-element form-select">
                <select name="level" id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field">
                    <option disabled selected value="" class="form-select-placeholder"></option>
                    <option value="1">I ex : Master, doctorat</option>
                    <option value="2">II ex : Licence</option>
                    <option value="3">III ex : BTS, DUT...</option>
                    <option value="4">IV ex : Bac</option>
                    <option value="5">V ex : Brevet des collèges</option>
                </select>

                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">Selectionner le niveau de la formation</label>
                <?php echo form_error('level', '<p class="error">', '</p>') ?>

            </div>

            <div class="form-element form-input">
                <input name="diploma" id="exp_metier" class="form-element-field" value="<?php if(!empty($_POST['diploma'])) {echo $_POST['diploma'];} ?>" placeholder="ex : BTS Vente" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_metier">Nom de la formation</label>
                <?php echo form_error('diploma', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-input">
                <input name="school" id="exp_entreprise" class="form-element-field" value="<?php if(!empty($_POST['school'])) {echo $_POST['school'];} ?>" placeholder="Remplir avec l'école" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_entreprise">École</label>
                <?php echo form_error('school', '<p class="error">', '</p>') ?>
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
                <textarea name="desc" id="exp_description" class="form-element-field" placeholder="Ce que cette formation vous a apporté"><?php if(!empty($_POST['desc'])) {echo $_POST['desc'];} ?></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_description">Description</label>
                <?php echo form_error('diploma', '<p class="error">', '</p>') ?>

            </div>

        </fieldset>
        <div class="form-actions">
            <button id="button" class="form-btn" type="button"><a href="<?php if(validation_errors()){ echo "../";} ?>step4-create">Suivant</a></button>
            <button class="form-btn-cancel -nooutline" type="submit">Ajouter une formation </button>
        </div>
    </form>
</div>

<div class="tableau">
    <table>
        <thead>
        <tr>
            <th>Niveau</th>
            <th>Formation</th>
            <th>École</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Description</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($liste as $value){ ?>
        <tr>
            <td><?= $value['level'] ?></td>
            <td><strong><?= $value['diploma'] ?></strong></td>
            <td><?= $value['school'] ?></td>
            <td><?= $value['beginning'] ?></td>
            <td><?= $value['ending'] ?></td>
            <td><?= $value['description'] ?></td>
            <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionEducation/<?= $value['id'] ?>/f"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

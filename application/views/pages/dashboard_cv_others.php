<body>

<div class="top">

    <div class="logo-box">
        <img src="img/logo.png" alt="logo" class="logo">
    </div>


    <div class="text-box">
        <h2 class="heading-primary">
            <span class="heading-primary-main">Autres</span>
            <span class="heading-primary-sub">Etape 5 </span>
        </h2>

        <div class="step-number">
            <img src="img/1.png" alt="" class="step-number1">
            <img src="img/2.png" alt="" class="step-number2">
            <img src="img/3.png" alt="" class="step-number3">
            <img src="img/4.png" alt="" class="step-number4">
            <img src="img/5a.png" alt="" class="step-number5">
        </div>
    </div>
</div>

<div class="middle">

    <form class="form-card" onsubmit="return sure()" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementLanguage" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une langue</legend>

            <div class="form-element form-input">
                <input name="name1" id="skm_name" value="<?php if(!empty($_POST['name1'])) {echo $_POST['name1'];} ?>" class="form-element-field" placeholder="Francais, english..." type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="skm_name">Langue</label>
                <?php echo form_error('name1', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-checkbox form-checkbox-inline">
                <div class="form-checkbox-legend">Niveau</div>
                <?php echo form_error('level[]', '<p class="error">', '</p>') ?>
                <label class="form-checkbox-label">
                    <input name="level[write]" class="form-checkbox-field" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Ecrit</span>
                </label>
                <label class="form-checkbox-label">
                    <input name="level[read]" class="form-checkbox-field" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Lu</span>
                </label>
                <label class="form-checkbox-label">
                    <input name="level[speak]" class="form-checkbox-field" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Parlé</span>
                </label>
            </div>

        </fieldset>
        <div class="form-actions">
            <button name="submitted" class="form-btn-cancel -nooutline" type="submit">Ajouter une langue</button>
        </div>
    </form>
</div>

<div class="tableau">
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Ecrit</th>
            <th>Lu</th>
            <th>Parlé</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($liste1 as $value){ ?>
        <tr>
            <td><strong><?= $value['name'] ?></strong></td>
            <td><?php if($value['lan_write'] == 1) {echo "Oui";} else {echo "Non";} ?></td>
            <td><?php if($value['lan_read'] == 1) {echo "Oui";} else {echo "Non";} ?></td>
            <td><?php if($value['lan_speak'] == 1) {echo "Oui";} else {echo "Non";} ?></td>
            <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionLanguage/<?= $value['id'] ?>/f"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<div class="middle">

    <form class="form-card" onsubmit="return sure()" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementHobby" method="post">

        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter un hobby</legend>

            <div class="form-element form-input">
                <input name="name2" id="sks_name" class="form-element-field" value="<?php if(!empty($_POST['name2'])) {echo $_POST['name2'];} ?>" placeholder="ex : sport..." type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="sks_name">Nom</label>
                <?php echo form_error('name2', '<p class="error">', '</p>') ?>
            </div>

        </fieldset>
        <div class="form-actions">
            <button class="form-btn-cancel -nooutline" type="submit">Ajouter un hobby</button>
        </div>
    </form>
</div>

<div class="tableau">
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Supprimer</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($liste2 as $value){ ?>
        <tr>
            <td><strong><?= $value['name'] ?></strong></td>
            <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionHobby/<?= $value['id'] ?>/f"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<div class="middle">

    <form class="form-card" onsubmit="return sure()" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementAward" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une récompense</legend>

            <div class="form-element form-input">
                <input name="name3" id="sko_name" class="form-element-field" value="<?php if(!empty($_POST['name3'])) {echo $_POST['name3'];} ?>" placeholder="1er concours d'echec" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="sko_name">Nom</label>
                <?php echo form_error('name3', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-input">
                <input name="year" id="exp_fin" class="form-element-field" value="<?php if(!empty($_POST['year'])) {echo $_POST['year'];} ?>" placeholder="Date d'obtention" type="date" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_fin">Date</label>
                <?php echo form_error('year', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-textarea">
                <textarea name="desc" id="sko_description" class="form-element-field" placeholder=""><?php if(!empty($_POST['diploma'])) {echo $_POST['diploma'];} ?></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="sko_description">Description</label>
                <?php echo form_error('desc', '<p class="error">', '</p>') ?>
            </div>

        </fieldset>
        <div class="form-actions">
            <a href="<?php if(validation_errors()){ echo "../";} ?>finalisation-create"><button id="button" data-name="preview.html" class="form-btn" type="button">Suivant</button></a>
            <button class="form-btn-cancel -nooutline" type="submit">Ajouter une  récompence</button>
        </div>
    </form>
</div>

<div class="tableau">
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Date</th>
            <th>Description</th>
            <th>Supprimer</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($liste3 as $value){ ?>
        <tr>
            <td><strong><?= $value['name'] ?></strong></td>
            <td><?= $value['year'] ?></td>
            <td><?= $value['description'] ?></td>
            <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionAward/<?= $value['id'] ?>/f"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<div class="bottom">

</div>
<div class="clear"></div>

<script type='text/javascript' src='js/script.js'></script>

</body>



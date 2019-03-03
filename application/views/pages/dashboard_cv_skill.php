<div class="middle">

    <form class="form-card" onsubmit="return sure()" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementSkillP" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une compétence principale</legend>

            <div class="form-element form-input">
                <input name="name1" id="skm_name" class="form-element-field" placeholder="Compétence principale pour le metier" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="skm_name">Nom</label>
                <?php echo form_error('name1', '<p class="error">', '</p>') ?>
            </div>

        </fieldset>
        <div class="form-actions">
            <button class="form-btn-cancel -nooutline" type="submit">Ajouter une compétence principale</button>
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
        <?php foreach ($liste1 as $value){ ?>
        <tr>
            <td><strong><?= $value['name'] ?></strong></td>
            <td><a class="" ><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<div class="middle">

    <form class="form-card" onsubmit="return sure()" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementSkillS" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une compétence secondaire</legend>

            <div class="form-element form-input">
                <input name="name2" id="sks_name" class="form-element-field" placeholder="Compétence secondaire pour le metier" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="sks_name">Nom</label>
                <?php echo form_error('name2', '<p class="error">', '</p>') ?>
            </div>

        </fieldset>
        <div class="form-actions">
            <button class="form-btn-cancel -nooutline" type="submit">Ajouter une compétence secondaire</button>
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
            <td><a class="" ><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>

        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<div class="middle">

    <form class="form-card" onsubmit="return sure()" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementSkillO" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une compétence organisationelle</legend>

            <div class="form-element form-input">
                <input name="name3" id="sko_name" class="form-element-field" placeholder="Compétence organisationelle pour le metier" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="sko_name">Nom</label>
                <?php echo form_error('name3', '<p class="error">', '</p>') ?>
            </div>

        </fieldset>
        <div class="form-actions">
            <a href="<?php if(validation_errors()){ echo "../";} ?>step5-create"><button id="button" data-name="others.html" class="form-btn" type="button">Suivant</button></a>
            <button class="form-btn-cancel -nooutline" type="submit">Ajouter une compétence organisationelle</button>
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
        <?php foreach ($liste3 as $value){ ?>
        <tr>
            <td><strong><?= $value['name'] ?></strong></td>
            <td><a class="" ><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
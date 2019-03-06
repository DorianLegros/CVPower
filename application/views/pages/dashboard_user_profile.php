<div class="top">

    <div class="logo-box">
        <img src="<?php if(validation_errors()) { echo "../";} ?>img/logo.png" alt="logo" class="logo">
    </div>


    <div class="text-box">
        <h2 class="heading-primary">
            <span class="heading-primary-main">Profil</span>
        </h2>

    </div>
</div>

<div class="middle">

    <form class="form-card" onsubmit="return sure()" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementProfile" method="post">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Modifier mon profil</legend>

            <div class="form-element form-input">
                <input name="lastname" id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" value="<?php if(!empty($liste[0]['lastname'])){echo $liste[0]['lastname'];} ?>" class="form-element-field" placeholder="" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Nom</label>
                <?php echo form_error('lastname', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-input">
                <input name="name" id="" class="form-element-field" placeholder="" value="<?php if(!empty($liste[0]['name'])){echo $liste[0]['name'];} ?>" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Prenom</label>
                <?php echo form_error('name', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-input">
                <input name="phone" id="" class="form-element-field" placeholder="" value="<?php if(!empty($liste[0]['phone_number'])){echo '0'.$liste[0]['phone_number'];} ?>" type="number" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Téléphone</label>
                <?php echo form_error('phone', '<p class="error">', '</p>') ?>
            </div>

            <div class="form-element form-select">
                <select name="driving" id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field">
                    <option value="1" <?php if($liste[0]['driving_licence'] == 1){echo 'selected';} ?>>Oui</option>
                    <option value="0" <?php if($liste[0]['driving_licence'] == 0){echo 'selected';} ?>>Non</option>
                </select>

                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">Avez-vous le permis ?</label>

            </div>

        </fieldset>
        <div class="form-actions">
            <button id="button" data-name="dashboard.html" class="form-btn" name="submitted" type="submit">Valider</button>
        </div>
    </form>


</div>

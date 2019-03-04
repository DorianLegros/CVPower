<body>

<div class="top">

    <div class="logo-box">
        <img src="img/logo.png" alt="logo" class="logo">
    </div>


    <div class="text-box">
        <h2 class="heading-primary">
            <span class="heading-primary-main">Le CV</span>
            <span class="heading-primary-sub">Etape 1 </span>
        </h2>

        <div class="step-number">
            <img src="img/1a.png" alt="" class="step-number1">
            <img src="img/2.png" alt="" class="step-number2">
            <img src="img/3.png" alt="" class="step-number3">
            <img src="img/4.png" alt="" class="step-number4">
            <img src="img/5.png" alt="" class="step-number5">
        </div>
    </div>
</div>

<div class="middle">
    <form class="form-card" onsubmit="return sure()" action="<?php if(!validation_errors()) { echo "Forms/";} ?>traitementStart" method="post">

        <fieldset class="form-fieldset">

            <legend class="form-legend">Ajouter un CV</legend>

            <div class="form-element form-input">
                <input name="name" id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" value="<?php if(!empty($_POST['name'])) {echo $_POST['name'];} ?>" placeholder="Le nom du CV" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Nom</label>
                <?php echo form_error('name', '<p class="error">', '</p>') ?>
            </div>


            <div class="form-element form-textarea">
                <textarea name="description" id="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm" value="<?php if(!empty($_POST['description'])) {echo $_POST['description'];} ?>" class="form-element-field" placeholder=" "></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm">Description</label>
                <?php echo form_error('description', '<p class="error">', '</p>') ?>
            </div>

        </fieldset>
        <div class="form-actions">
            <button id="button" class="form-btn" type="submit" name="submitted">Suivant</button>
        </div>
    </form>


</div>

<div class="bottom">

</div>
<div class="clear"></div>

</body>
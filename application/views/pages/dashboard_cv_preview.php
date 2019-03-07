<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>

<div class="top">

    <div class="logo-box">
        <img src="<?php if(validation_errors()) { echo "../";} ?>img/logo.png" alt="logo" class="logo">
    </div>


    <div class="text-box">
        <h2 class="heading-primary">
            <span class="heading-primary-main">Preview</span>
        </h2>


    </div>
</div>

<div class="middle">

    <h2 class="pre-first-title">Verifiez le contenu de votre CV</h2>

    <div class="tableau">

        <h3 class="pre-title">Expérience</h3>

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
            <?php foreach ($liste_exp as $value){ ?>
            <tr>
                <td><strong><?= $value['name_job'] ?></strong></td>
                <td><?= $value['compagny'] ?></td>
                <td><?= $value['beginning'] ?></td>
                <td><?= $value['ending'] ?></td>
                <td><?= $value['description'] ?></td>
                <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionExperience/<?= $value['id'] ?>/final"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <h3 class="pre-title">Formation</h3>

        <table>
            <thead>
            <tr>
                <th>Niveau</th>
                <th>Formation</th>
                <th>Ecole</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Description</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($liste_edu as $value){ ?>
            <tr>
                <td><?= $value['level'] ?></td>
                <td><strong><?= $value['diploma'] ?></strong></td>
                <td><?= $value['school'] ?></td>
                <td><?= $value['beginning'] ?></td>
                <td><?= $value['ending'] ?></td>
                <td><?= $value['description'] ?></td>
                <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionEducation/<?= $value['id'] ?>/final"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <h3 class="pre-title">Compétences Principales</h3>

        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($liste_sklp as $value){ ?>
            <tr>
                <td><strong><?= $value['name'] ?></strong></td>
                <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionSkillP/<?= $value['id'] ?>/final"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <h3 class="pre-title">Compétences Secondaires</h3>

        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($liste_skls as $value){ ?>
                <tr>
                    <td><strong><?= $value['name'] ?></strong></td>
                    <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionSkillS/<?= $value['id'] ?>/final"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <h3 class="pre-title">Compétences Organisationelles</h3>

        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($liste_sklo as $value){ ?>
                <tr>
                    <td><strong><?= $value['name'] ?></strong></td>
                    <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionSkillO/<?= $value['id'] ?>/final"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <h3 class="pre-title">Langues</h3>

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
            <?php foreach ($liste_lang as $value){ ?>
                <tr>
                    <td><strong><?= $value['name'] ?></strong></td>
                    <td><?php if($value['lan_write'] == 1) {echo "Oui";} else {echo "Non";} ?></td>
                    <td><?php if($value['lan_read'] == 1) {echo "Oui";} else {echo "Non";} ?></td>
                    <td><?php if($value['lan_speak'] == 1) {echo "Oui";} else {echo "Non";} ?></td>
                    <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionLanguage/<?= $value['id'] ?>/final"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <h3 class="pre-title">Hobbies</h3>

        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($liste_hobby as $value){ ?>
            <tr>
                <td><strong><?= $value['name'] ?></strong></td>
                <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionHobby/<?= $value['id'] ?>/final"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <h3 class="pre-title">Récompenses</h3>

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
            <?php foreach ($liste_award as $value){ ?>
                <tr>
                    <td><strong><?= $value['name'] ?></strong></td>
                    <td><?= $value['year'] ?></td>
                    <td><?= $value['description'] ?></td>
                    <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ceci ?');" href="<?php if(validation_errors()) { echo "../";} else ?>Actions/suppressionAward/<?= $value['id'] ?>/final"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
                </tr>
            <?php } ?>
            </tbody>



        </table>
        <div class="form-actions">
            <form class="form-card" action="<?php if(!validation_errors()) { echo "Actions/";} ?>validationFormulaire" method="post">
                <fieldset class="form-fieldset">
                    <legend class="form-legend">Votre CV est bientot terminé</legend>

                    <div class="contener_canvas">
                        <canvas width="400" height="400" id="canvas_picker" class="color_wheel"></canvas>
                    </div>
                    <div class="form-element form-input">
                        <div id="rgb"><input name="color" class="form-element-field"  placeholder="" type="text"></div>
                        <div class="form-element-bar"></div>
                        <label class="form-element-label" for="color">Couleur</label>
                        <?php echo form_error('color', '<p class="error">', '</p>') ?>
                    </div>

                </fieldset>
                <div class="form-actions">
                    <button id="button" class="form-btn" type="submit">Valider</button>
                </div>
            </form>
        </div>

</div>


</div>


<script type="text/javascript">

    var canvas = document.getElementById('canvas_picker').getContext('2d');

    // create an image object and get it’s source
    var img = new Image();
    img.src = '<?php if(validation_errors()) { echo "../";} ?>img/color_wheel.png';

    // copy the image to the canvas
    $(img).load(function(){
        canvas.drawImage(img,0,0);
    });

    // http://www.javascripter.net/faq/rgbtohex.htm
    function rgbToHex(R,G,B) {return toHex(R)+toHex(G)+toHex(B)}
    function toHex(n) {
        n = parseInt(n,10);
        if (isNaN(n)) return "00";
        n = Math.max(0,Math.min(n,255));
        return "0123456789ABCDEF".charAt((n-n%16)/16)  + "0123456789ABCDEF".charAt(n%16);
    }
    $('#canvas_picker').click(function(event){
        // getting user coordinates
        var x = event.pageX - this.offsetLeft;
        var y = event.pageY - this.offsetTop;
        // getting image data and RGB values
        var img_data = canvas.getImageData(x, y, 1, 1).data;
        var R = img_data[0];
        var G = img_data[1];
        var B = img_data[2];  var rgb = R + ',' + G + ',' + B;
        // convert RGB to HEX
        var hex = rgbToHex(R,G,B);
        // making the color the value of the input
        $('#rgb input').val(rgb);
        $('#hex input').val('#' + hex);
    });


</script>
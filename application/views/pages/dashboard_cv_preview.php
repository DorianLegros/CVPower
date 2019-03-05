<body>

<div class="top">

    <div class="logo-box">
        <img src="img/logo.png" alt="logo" class="logo">
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
                <th>Description</th>
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
                <th>Description</th>
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
                <th>Description</th>
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
            <a href="Actions/validationFormulaire"><button id="button" class="form-btn" type="submit">Valider</button></a>
        </div>
    </div>




</div>


</div>

<div class="bottom">

</div>
<div class="clear"></div>

<script type='text/javascript' src='js/script.js'></script>

</body>

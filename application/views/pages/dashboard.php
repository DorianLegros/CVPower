<div class="top">

    <div class="logo-box">
        <img src="img/logo.png" alt="logo" class="logo">
    </div>


    <div class="text-box">
        <h2 class="heading-primary">
            <span class="heading-primary-main">Tableau de bord</span>
            <span class="heading-primary-sub"><?= $liste[0]['name'].' '.$liste[0]['lastname'] ?></span>
        </h2>
    </div>
</div>

<div class="middle">

    <div class="button-content">

        <div class="button-content-sub">
            <a class="button-three" href="step1-create">Ajouter un CV</a>
        </div>

        <div class="button-content-sub">
            <a class="button-three" href="profile">Modifier le profil</a>
        </div>

        <div class="button-content-sub">
            <a class="button-three" href="logout">Deconnexion</a>
        </div>


    </div>

    <div class="tableau">
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Mise à jour le </th>
                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($liste2 as $value){ ?>
            <tr>
                <td><a href="view/<?= $value['id'] ?>" target="_blank"><strong><?= $value['name'] ?></strong></a></td>
                <td><?php if(!empty($value['updated_at'])) {echo $value['updated_at'];} else {echo $value['created_at'];} ?></td>
                <td><a class="" ><img src="https://img.icons8.com/color/24/000000/multi-edit.png" alt="Modifier" title="Modifier"></a></td>
                <td><a class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre CV ? Cette action sera irréversible !');" href="Actions/suppressionCV/<?= $value['id'] ?>/f"><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>
            </tr>
            <?php } ?>

            </tbody>
        </table>

    </div>



</div>


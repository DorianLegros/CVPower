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

    <form class="form-card" onsubmit="return sure()">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une langue</legend>

            <div class="form-element form-input">
                <input id="skm_name" class="form-element-field" placeholder="Francais, english..." type="input" required/>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="skm_name">Langue</label>
            </div>

            <div class="form-checkbox form-checkbox-inline">
                <div class="form-checkbox-legend">Niveau</div>
                <label class="form-checkbox-label">
                    <input name=rap class="form-checkbox-field" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Ecrit</span>
                </label>
                <label class="form-checkbox-label">
                    <input name=pop class="form-checkbox-field" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Lu</span>
                </label>
                <label class="form-checkbox-label">
                    <input name=rock class="form-checkbox-field" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Parlé</span>
                </label>
            </div>

        </fieldset>
        <div class="form-actions">
            <button class="form-btn-cancel -nooutline" type="submit">Ajouter une langue</button>
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
        <tr>
            <td><strong>Francais</strong></td>
            <td>oui</td>
            <td>oui</td>
            <td>oui</td>
            <td><a class="" ><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>

        </tr>
        </tbody>
    </table>

</div>

<div class="middle">

    <form class="form-card" onsubmit="return sure()">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter un hobby</legend>

            <div class="form-element form-input">
                <input id="sks_name" class="form-element-field" placeholder="ex : sport..." type="input" required/>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="sks_name">Nom</label>
            </div>

            <div class="form-element form-textarea">
                <textarea id="sks_description" class="form-element-field" placeholder=""></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="sks_description">Description</label>
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
            <th>Description</th>
            <th>Supprimer</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td><strong>Hobby</strong></td>
            <td>Blablabla bla</td>
            <td><a class="" ><img src="https://img.icons8.com/color/24/000000/close-window.png" alt="Supprimer" title="Supprimer"></a></td>

        </tr>
        </tbody>
    </table>

</div>

<div class="middle">

    <form class="form-card" onsubmit="return sure()">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une récompense</legend>

            <div class="form-element form-input">
                <input id="sko_name" class="form-element-field" placeholder="1er concours d'echec" type="input" required/>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="sko_name">Nom</label>
            </div>

            <div class="form-element form-textarea">
                <textarea id="sko_description" class="form-element-field" placeholder=""></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="sko_description">Description</label>
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
            <th>Description</th>
            <th>Supprimer</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td><strong>Récompense</strong></td>
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



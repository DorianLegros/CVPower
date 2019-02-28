<body>

<div class="top">

    <div class="logo-box">
        <img src="img/logo.png" alt="logo" class="logo">
    </div>


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

    <form class="form-card" onsubmit="return sure()">
        <fieldset class="form-fieldset">
            <legend class="form-legend">Ajouter une formation</legend>

            <div class="form-element form-select">
                <select id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field">
                    <option disabled selected value="" class="form-select-placeholder"></option>
                    <option value="I">I ex : Master, doctorat</option>
                    <option value="II">II ex : Licence</option>
                    <option value="III">III ex : BTS, DUT...</option>
                    <option value="IV">IV ex : Bac</option>
                    <option value="V">V ex : Brevet des collèges</option>
                </select>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">Selectionner niveau de la formation</label>
            </div>

            <div class="form-element form-input">
                <input id="exp_metier" class="form-element-field" placeholder="ex : BTS Vente" type="input" required/>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_metier">Nom de la formation</label>
            </div>

            <div class="form-element form-input">
                <input id="exp_entreprise" class="form-element-field" placeholder="Remplir avec l'école" type="input" required/>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_entreprise">Ecole</label>
            </div>

            <div class="form-element form-input">
                <input id="exp_debut" class="form-element-field" placeholder="Remplir avec la date du début" type="date" required/>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_debut">Date début</label>
            </div>

            <div class="form-element form-input">
                <input id="exp_fin" class="form-element-field" placeholder="Remplir avec la date du début" type="date" required/>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_fin">Date de fin</label>
            </div>

            <div class="form-element form-textarea">
                <textarea id="exp_description" class="form-element-field" placeholder="Ce que cette formation vous a apporté"></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="exp_description">Description</label>
            </div>

        </fieldset>
        <div class="form-actions">
            <button id="button" data-name="skill.html" class="form-btn" type="button">Suivant</button>
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
            <th>Ecole</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Description</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>I</td>
            <td><strong>Formation</strong></td>
            <td>Ecole</td>
            <td>01/08/2018</td>
            <td>01/08/2018</td>
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


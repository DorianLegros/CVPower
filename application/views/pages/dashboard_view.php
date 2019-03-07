<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="sass/img/logo-blue.png">
    <link href="../css/default.css" rel="stylesheet" />
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css' />

</head>

<body style="background-image:linear-gradient(to right bottom, rgba(<?= $liste_cv[0]['color'] ?>, 0.8), rgba(119, 155, 236, 0.8))">

<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">
    <svg class="wheel"
         xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
         width="80" height="80"
         viewBox="0 0 224 224"
         style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-size="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g><g id="surface1"><path d="M184.80729,126.92969c0.45573,-3.26302 0.92968,-6.52604 0.92968,-10.26302c0,-3.73698 -0.47396,-7 -0.92968,-10.26302l21,-14.92968c1.85937,-1.40365 2.78906,-4.21094 1.38542,-6.54427l-20.52604,-34.52604c-1.40364,-2.33333 -3.73698,-3.26302 -6.07031,-1.8776l-23.33333,10.73698c-5.59636,-4.19271 -11.19271,-7.45573 -17.73698,-10.26302l-2.33333,-25.66667c-0.45573,-2.33333 -2.33333,-4.19271 -4.66667,-4.19271h-40.1224c-2.33333,0 -4.66667,1.85937 -4.66667,4.19271l-2.33333,25.66667c-6.54427,2.80729 -12.59635,6.07031 -17.73698,10.26302l-23.33333,-10.73698c-2.33333,-0.92969 -5.14062,0 -6.07031,1.8776l-20.07031,34.52604c-1.38542,2.33333 -0.45573,5.14062 1.40364,6.54427l21,14.92968c-0.45573,3.26302 -0.92969,6.52604 -0.92969,10.26302c0,3.73698 0.47396,7 0.92969,10.26302l-21.92969,14.92969c-1.85937,1.40364 -2.80729,4.21093 -1.40364,6.54427l20.07031,34.52604c1.40364,2.33333 3.73698,3.26302 6.07031,1.87761l23.33333,-10.73698c5.59636,4.19271 11.19271,7.45573 17.73698,10.26302l2.33333,25.66667c0.45573,2.33333 2.33333,4.19271 4.66667,4.19271h40.12239c2.33333,0 4.66667,-1.85938 4.66667,-4.19271l2.33333,-25.66667c6.54427,-2.80729 12.59636,-6.07031 17.73698,-10.26302l23.33333,10.73698c2.33333,0.92968 5.14063,0 6.07031,-1.87761l20.07032,-34.52604c1.38542,-2.33333 0.45573,-5.14062 -1.40365,-6.54427zM112,163.33333c-25.66667,0 -46.66667,-21 -46.66667,-46.66667c0,-25.66667 21,-46.66667 46.66667,-46.66667c25.66667,0 46.66667,21 46.66667,46.66667c0,25.66667 -21,46.66667 -46.66667,46.66667z" fill="#cccccc"></path><path d="M112,60.66667c-30.80729,0 -56,25.19271 -56,56c0,30.80729 25.19271,56 56,56c30.80729,0 56,-25.19271 56,-56c0,-30.80729 -25.19271,-56 -56,-56zM112,140c-13.07031,0 -23.33333,-10.26302 -23.33333,-23.33333c0,-13.07031 10.26302,-23.33333 23.33333,-23.33333c13.07031,0 23.33333,10.26302 23.33333,23.33333c0,13.07031 -10.26302,23.33333 -23.33333,23.33333z" fill="#666666"></path></g></g></g></svg>
</button> -->

<!-- The Modal -->
<!-- <div id="myModal" class="modal"> -->

    <!-- Modal content -->
    <!-- <div class="modal-content modal-size">
        <span class="close">&times;</span>

        <form class="modal-size">
            <div class="modal-style">
                <a class="" ><img src="https://img.icons8.com/color/48/000000/back-sorting.png" alt="Publier" title="Publier"></a>
                <a class="" ><img src="https://img.icons8.com/color/48/000000/multi-edit.png" alt="Modifier" title="Modifier"></a>
                <a class="" ><img src="https://img.icons8.com/color/50/000000/close-window.png" alt="Supprimer" title="Supprimer"></a>
            </div>
        </form>

    </div>

</div> -->


<div id="wrapper">

    <div id="contact-info">
        <div  class="links" style="margin-left:0px !important;">
            <div class="col1">Email</div>
            <div class="col2"><a href="mailto:<?= $liste_user[0]['mail'] ?>" target="_blank"><?= $liste_user[0]['mail'] ?></a></div>
        </div>

        <div  class="links">
            <div class="col1">Tel</div>
            <div class="col2"><a href="tel:<?= "0" . $liste_user[0]['phone_number'] ?>" target="_blank"><?= "0" . $liste_user[0]['phone_number'] ?></a></div>
        </div>

        <div  class="links">
            <div class="col1">Permis B :</div>
            <div class="col2"><?php if($liste_user[0]['driving_licence'] == 0){echo "Non";} else {echo "Oui";} ?></div>
        </div>

        <div  class="links">
            <div class="col1">Version papier :</div>
            <div class="col2"><a href="http://localhost/cvpower/API_pdf/<?= $liste_cv[0]['id'] ?>" target="_blank"> PDF</a></div>
        </div>



    </div>

    <div id="header">
        <h1><?= $liste_user[0]['name'] . " " . $liste_user[0]['lastname'] ?></h1>
    </div>


    <div id="intro">
        <p><?= $liste_cv[0]['description'] ?></p>
    </div>



    <div class="section">
        <div class="section-title"><p id="education-section">Formation</p></div>

        <div class="clear"></div>

        <div class="section-body">

            <?php for ($i = 0; $i != count($liste_edu); $i++) { ?>

                <div class="item-template">
                    <div>
                        <h2><?= $liste_edu[$i]['diploma'] ?></h2>
                        <h3><?= $liste_edu[$i]['school'] ?></h3>
                        <span class="text-small"><?= date('d M Y', strtotime($liste_edu[$i]['beginning'])) . " au " . date('d M Y', strtotime($liste_edu[$i]['ending']));
                            ?> </span>
                    </div>

                    <div class="your-details">
                        <?php switch ($liste_edu[$i]["level"]) {
                            case 1:
                                echo " I ex : Master, doctorat";
                                break;
                            case 2:
                                echo "II ex : Licence";
                                break;
                            case 3:
                                echo "III ex : BTS, DUT...";
                                break;
                            case 4:
                                echo "IV ex : Bac";
                                break;
                            case 5:
                                echo "V ex : Brevet des collèges";
                                break;
                        };
                        ?>

                    </div>
                </div>

                <p><?= $liste_edu[$i]['description'] ?></p>

            <?php } ?>



        </div>
    </div>

    <!-- Experience Section-->
    <div class="section">
        <div class="section-title"><p id="experience-section">Experience</p></div>

        <div class="clear"></div>

        <div class="section-body">

            <?php for ($i = 0; $i != count($liste_exp); $i++) { ?>

                <div class="item-template">
                    <div>
                        <h2><?= $liste_exp[$i]['name_job'] ?></h2>
                        <span class="text-small"><?= date('d M Y', strtotime($liste_exp[$i]['beginning'])) . " au " . date('d M Y', strtotime($liste_exp[$i]['ending']));
                            ?> </span>
                    </div>

                    <div class="your-details">
                        <?php echo $liste_exp[$i]['compagny'];?>

                    </div>
                </div>

                <p><?= $liste_exp[$i]['description'] ?></p>

            <?php } ?>



        </div>
    </div>



    <!-- Skills -->

    <div class="section">
        <div class="section-title"><p id="skills-section">Compétences</p></div>

        <div class="clear"></div>

        <div class="section-body">

            <?php for ($i = 0; $i != count($liste_sklp); $i++) { ?>

                <div class="item-template">
                    <div>
                        <h2><?= $liste_sklp[$i]['name'] ?></h2>

                    </div>

                    <div class="your-details">
                       Principales

                    </div>
                </div>


            <?php } ?>

            <?php for ($i = 0; $i != count($liste_skls); $i++) { ?>

                <div class="item-template">
                    <div>
                        <h2><?= $liste_skls[$i]['name'] ?></h2>

                    </div>

                    <div class="your-details">
                        Secondaires

                    </div>
                </div>


            <?php } ?>

            <?php for ($i = 0; $i != count($liste_sklo); $i++) { ?>

                <div class="item-template">
                    <div>
                        <h2><?= $liste_sklo[$i]['name'] ?></h2>

                    </div>

                    <div class="your-details">
                        Organisationnelles

                    </div>
                </div>


            <?php } ?>

        </div>




    </div>

    <div class="section">
        <div class="section-title"><p id="Language-section">Langue</p></div>

        <div class="clear"></div>

        <div class="section-body">

            <?php   for ($i = 0; $i != count($liste_lang); $i++) { ?>

                <div class="item-template">
                    <div>
                        <h2><?php echo $liste_lang[$i]['name'];?></h2>
                    </div>
                </div>

                <p><u>Ecrit :</u>
                    <?php
                    if ($liste_lang[$i]['lan_write'] == 1) {
                        $lan_write = "Oui";
                    } else {
                        $lan_write = "Non";
                    }
                    echo  $lan_write;

                    ?>,

                    <u>Lu :</u>
                    <?php
                    if ($liste_lang[$i]['lan_read'] == 1) {
                        $lan_read = "Oui";
                    } else {
                        $lan_read = "Non";
                    }
                    echo  $lan_read;

                    ?>,
                    <u>Parlé :</u>
                    <?php
                    if ($liste_lang[$i]['lan_speak'] == 1) {
                        $lan_speak = "Oui";
                    } else {
                        $lan_speak = "Non";
                    }
                    echo  $lan_speak;

                    ?>
                </p>

            <?php } ?>

        </div>


        <div class="section">
            <div class="section-title"><p id="others-section">Hobby</p></div>

            <div class="clear"></div>

            <div class="section-body">

                <?php   for ($i = 0; $i != count($liste_hobby); $i++) { ?>

                    <div class="item-template">
                        <div>
                            <h2><?php echo $liste_hobby[$i]['name'];?></h2>
                        </div>

                    </div>

                <?php } ?>

            </div>


            <div class="section">
                <div class="section-title"><p id="award-section">Récompense</p></div>

                <div class="clear"></div>

                <div class="section-body">

                    <?php   for ($i = 0; $i != count($liste_award); $i++) { ?>

                    <div class="item-template">
                        <div>
                            <h2><?php echo $liste_award[$i]['name'];?></h2>
                        </div>

                        <div class="your-details">

                            <?=  date('d M Y', strtotime($liste_award[$i]['year'])) ?>

                        </div>

                    </div>

                    <p><?php echo $liste_award[$i]['description'];?></p>




                </div>
                <?php } ?>

        </div>
    </div>
</div>

<div id="footer">

</div>
<script type="text/javascript">
    /*
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    } */
</script>

</body>
</html>


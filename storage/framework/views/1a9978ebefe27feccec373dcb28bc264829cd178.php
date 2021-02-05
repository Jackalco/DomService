<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layouts.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/home.css')); ?>">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/navbar.js')); ?>"></script>

        <title>DOM Services</title>

    </head>
    <body>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>
            <section class="companyContainer">
                <img src="<?php echo e(asset('images/img3.jpg')); ?>" class="companyContent" alt="img3">
                <div class="companyContent">
                    <h2>L'entreprise</h2>
                    <p>
                        DOM SERVICES met en évidence le respect, l’écoute et l’accompagnement de ses bénéficiaires.
                    </p>
                    <p>
                        Grâce à nos ABE et ABES (salariés), DOM SERVICES vous propose des prestations de qualités. Nous limitons le turn over pour répondre au mieux aux besoins et au respect des bénéficiaires. 
                    </p>
                    <p>
                        L’objectif principal de DOM SERVICES est le bien-être de ses bénéficiaires mais aussi celui de ses ABE et ABES.
                    </p>
                </div>
            </section>
            <section class="franchiseContainer">
                <img src="<?php echo e(asset('images/img9.jpg')); ?>" class="franchiseImage" alt="img9">
                <div class="franchiseContent">
                    <h2>Rejoignez le réseau DOM Services !</h2>
                    <p>Nous mettons à votre service notre analyse et notre évaluation des besoins afin de créer des prestations au plus juste de vos attentes.</p>
                    <a class="buttonAbout" href="<?php echo e(route('contact')); ?>">Devenir franchisé</a>
                </div>
            </section>
            <section class="recruitmentContainer">
                <div class="recruitmentContent">
                    Vous avez remarquez l'une de nos annonces ou souhaitez soumettre une candidature spontanée ?<br>
                    <a class="buttonAbout" href="<?php echo e(route('recruitment')); ?>">Nous rejoindre</a>
                </div>  
            </section>
            <!--<section class="homeRight">
                <div class="textHome">
                    <h2>Nos services</h2>
                    <p>Nous mettons à votre service notre analyse et notre évaluation des besoins afin de créer des prestations au plus juste de vos attentes.</p>
                    <br>
                    <a class="buttonAbout" href="<?php echo e(route('services')); ?>">En savoir plus</a>
                </div>
                <img src="<?php echo e(asset('images/img1.jpg')); ?>" class="imageHome" alt="img1">   
            </section>-->
            <section id="linkFindAgencies">
                <div id="containLinkFindAgencies">
                    <div id="textLinkFindAgencies">
                        <h4>Votre agence près de chez vous</h4>
                        <p>
                            Trouvez une de nos agences DOM Services étant le plus proche de chez vous.
                        </p>
                        <br>
                        <a class="buttonAbout" href="<?php echo e(route('agencies')); ?>">Trouvez une agence</a>
                    </div>
                    <div id="iconLinkFindAgencies">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </section>
        </main>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH D:\Laravel\WebSiteStage\DomService\resources\views/home.blade.php ENDPATH**/ ?>
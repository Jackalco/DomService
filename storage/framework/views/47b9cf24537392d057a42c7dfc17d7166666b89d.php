<nav>
    <div id="navBar" class="navButtonContainer">
        <a class="navButton" href="<?php echo e(route('home')); ?>">Accueil</a>
        <a class="navButton" href="<?php echo e(route('services')); ?>">Services</a>
        <a class="navButton" href="<?php echo e(route('agencies')); ?>">Agences</a>
        <a class="navButton" href="<?php echo e(route('recruitment')); ?>">Recrutement</a>
        <a class="navButton" href="<?php echo e(route('company')); ?>">L'entreprise</a>
        <a class="navButton" href="<?php echo e(route('contact')); ?>">Contact</a>          
    </div>
    <a href="javascript:void(0);" class="iconNavBar" onclick="showNavBar()">
            <i class="fa fa-bars"></i>
        </a> 
    <div id="logoContainer">
        <img id="logo" src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo DOM Services">
    </div>
</nav><?php /**PATH D:\Laravel\WebSiteStage\DomService\resources\views/layouts/nav.blade.php ENDPATH**/ ?>
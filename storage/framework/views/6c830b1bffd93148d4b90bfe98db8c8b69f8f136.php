<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Votre agence DOM Services près de chez vous.">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layouts.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/agencies.css')); ?>">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/navbar.js')); ?>"></script>

        <title>DOM Service - Agences</title>

    </head>
    <body>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>
            <h1>Nos agences</h1>
            <p>Trouvez l'agence la plus proche de chez vous.</p>
            <img class="imageMap" src="<?php echo e(asset('images/world.jpg')); ?>"  alt="Image de la Terre">
            <section class="containerAgencies">
                <?php $__currentLoopData = $agencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="containerAgency" value="<?php echo e($agency); ?>">
                        <div class="columnAgency">
                            <div class="itemAgency title"><?php echo e($agency->city); ?></div>
                            <div class="itemAgency"><strong>Adresse :</strong> <?php echo e($agency->address); ?></div>
                        </div>
                        <div class="columnAgency">
                            <div class="itemAgency"><strong>Téléphone :</strong> <?php echo e($agency->phone); ?></div>
                            <div class="itemAgency"><strong>Adresse mail :</strong> <?php echo e($agency->email); ?></div> 
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </section>
        </main>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH D:\Laravel\WebSiteStage\DomService\resources\views/agencies.blade.php ENDPATH**/ ?>
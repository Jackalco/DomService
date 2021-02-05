<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layouts.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/agencies.css')); ?>">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/navbar.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script>
        <script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9wddaK3UtsavXGkhK9x8W5Td0cSVXVLI&callback=initializeMap"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/map.js')); ?>"></script>

        <title>DOM Service</title>

    </head>
    <body>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>
            <h1>Nos agences</h1>
            <p>Trouvez l'agence la plus proche de chez vous.</p>
            <div class="googleMap" id="map"></div>
            <section id="containerAgencies">
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
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layouts.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/recruitment.css')); ?>">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/navbar.js')); ?>"></script>

        <title>DOM Service - Recrutement</title>

    </head>
    <body>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>
        <section id="recruitment">
                <div class="container">
                    <h1>Recrutement</h1>
                    <h3>Rejoignez-nous !</h3>
                    <p>Vous avez remarquez l'une de nos annonces ou souhaitez soumettre une candidature spontanée ? Alors n'hésitez pas à remplir notre formulaire de recrutement.</p>
                    <img src="<?php echo e(asset('images/recruitment.jpg')); ?>" alt="Image contact">
                </div>
                <div class="container">            

                    <form enctype="multipart/form-data" action="" method="post" action="<?php echo e(route('recruitment.store')); ?>">

                        <?php echo csrf_field(); ?>

                        <div class="itemForm">
                            <div class="labelForm">Nom</div>
                            <input type="text" class="inputForm <?php echo e($errors->has('name') ? 'error' : ''); ?>" name="name" id="name">

                            <?php if($errors->has('name')): ?>
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Email</div>
                            <input type="email" class="inputForm <?php echo e($errors->has('email') ? 'error' : ''); ?>" name="email" id="email">

                            <?php if($errors->has('email')): ?>
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Téléphone</div>
                            <input type="text" class="inputForm <?php echo e($errors->has('phone') ? 'error' : ''); ?>" name="phone" id="phone">

                            <?php if($errors->has('phone')): ?>
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Agence</div>
                            <select class="inputForm <?php echo e($errors->has('agency') ? 'error' : ''); ?>" name="agency" id="agency">
                                <option value="">Choississez une agence</option>
                                <?php $__currentLoopData = $agencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($agency->email); ?>"><?php echo e($agency->city); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <?php if($errors->has('agency')): ?>
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">CV</div>
                            <div>Fichier acceptés : .docx, .doc, .pdf, .png et .jpg</div>
                            <input type="file" accept=".docx, .doc, .pdf, .png, .jpg" class="fileInput <?php echo e($errors->has('cv') ? 'error' : ''); ?>" name="cv" id="cv">

                            <?php if($errors->has('cv')): ?>
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Lettre de motivation</div>
                            <div>Fichier acceptés : .docx, .doc, .pdf, .png et .jpg</div>
                            <input type="file" accept=".docx, .doc, .pdf, .png, .jpg" class="fileInput <?php echo e($errors->has('letter') ? 'error' : ''); ?>" name="letter" id="letter">

                            <?php if($errors->has('letter')): ?>
                            <div class="errorInput">
                                Ce champ est obligatoire.
                            </div>
                            <?php endif; ?>
                        </div>

                        <input type="submit" name="send" value="Envoyer" class="inputSubmit">

                        <?php if(Session::has('success')): ?>
                            <div class="alert">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                        
                    </form>
                </div>
            </section>
        </main>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH D:\Laravel\WebSiteStage\DomService\resources\views/recruitment.blade.php ENDPATH**/ ?>
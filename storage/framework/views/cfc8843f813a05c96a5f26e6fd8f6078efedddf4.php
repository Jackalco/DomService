<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layouts.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/contact.css')); ?>">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/navbar.js')); ?>"></script>

        <title>DOM Services</title>

    </head>
    <body>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>
            <section id="contact">
                <div class="container">
                    <h1>Contact</h1>
                    <h3>Contactez nous pour un devis gratuit.</h3>
                    <p>Nos équipes vous contacteront dans les plus brefs délais afin de vous proposer une aide personnalisée selon votre profil.</p>
                    <img src="<?php echo e(asset('images/contact.jpg')); ?>" alt="Image contact">
                </div>
                <div class="container">            

                    <form method="post" action="<?php echo e(route('contact.store')); ?>">

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
                            <div class="labelForm">Message</div>
                            <textarea class="textAreaForm <?php echo e($errors->has('message') ? 'error' : ''); ?>" name="message" id="message"></textarea>

                            <?php if($errors->has('message')): ?>
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
</html><?php /**PATH D:\Laravel\WebSiteStage\DomService\resources\views/contact.blade.php ENDPATH**/ ?>
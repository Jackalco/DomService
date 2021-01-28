<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layouts.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/contact.css')); ?>">
        <script src="https://kit.fontawesome.com/172e84d6d0.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/navbar.js')); ?>"></script>

        <title>DOM Service</title>

    </head>
    <body>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>
            <section id="contact">
                <h1>Contact</h1>
                <div class="container">

                    <!-- Success message -->
                    <?php if(Session::has('success')): ?>
                        <div>
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php endif; ?>

                    <form action="" method="post" action="<?php echo e(route('contact.store')); ?>">

                        <!-- CROSS Site Request Forgery Protection -->
                        <?php echo csrf_field(); ?>

                        <div class="itemForm">
                            <div class="labelForm">Nom</div>
                            <input type="text" class="inputForm <?php echo e($errors->has('name') ? 'error' : ''); ?>" name="name" id="name">

                            <!-- Error -->
                            <?php if($errors->has('name')): ?>
                            <div class="error">
                                <?php echo e($errors->first('name')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Email</div>
                            <input type="email" class="inputForm <?php echo e($errors->has('email') ? 'error' : ''); ?>" name="email" id="email">

                            <?php if($errors->has('email')): ?>
                            <div class="error">
                                <?php echo e($errors->first('email')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Téléphone</div>
                            <input type="text" class="inputForm <?php echo e($errors->has('phone') ? 'error' : ''); ?>" name="phone" id="phone">

                            <?php if($errors->has('phone')): ?>
                            <div class="error">
                                <?php echo e($errors->first('phone')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Agence</div>
                            <select class="inputForm <?php echo e($errors->has('subject') ? 'error' : ''); ?>" name="agency" id="agency">
                                <option value="">Choississez une agence</option>
                                <option value="Agence 1">Agence 1</option>
                                <option value="Agence 2">Agence 2</option>
                            </select>

                            <?php if($errors->has('subject')): ?>
                            <div class="error">
                                <?php echo e($errors->first('subject')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="itemForm">
                            <div class="labelForm">Message</div>
                            <textarea class="inputForm <?php echo e($errors->has('message') ? 'error' : ''); ?>" name="message" id="message"
                                rows="4"></textarea>

                            <?php if($errors->has('message')): ?>
                            <div class="error">
                                <?php echo e($errors->first('message')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <input type="submit" name="send" value="Submit" class="inputSubmit">
                    </form>
                </div>
            </section>
        </main>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH D:\Laravel\WebSiteStage\DomService\resources\views/contact.blade.php ENDPATH**/ ?>
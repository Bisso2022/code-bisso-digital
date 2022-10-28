
<?php $__env->startSection('style_accueil'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/css_site/style_contact.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="section_contact_header">
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="animate__animated animate__zoomIn">Contacter-nous</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section class="section_contact_section1">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 left"  data-aos="zoom-in-down" data-aos-offset="400">
                <h1>Nous sommes là pour vous au Maroc et à l'international.</h1>
                <p>pour tous besoins d'informations complémentaires, BISSO DIGITAL votre agence web vous accompagne
                    pour tous vos projets de la réalisation jusqu'à la mise en ligne.<br>
                    Faites nous confiance car votre désir de vous faire remarquer sur l'internet c'est notre mission
                    de vous aider alors n'hésiter pas à nous joindre pour une discussion claire et technique
                    afin de construire ensemble votre projet.
                </p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 rigth"  data-aos="zoom-in-down" data-aos-offset="450">
                <h1>Nos coordonnées</h1>
               <p>Vous pouvez nous joindres aussi sur ces references pour vos projets</p>
                <ul>
                    <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +212674070592</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i> contact@bissodigital.com</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section_contact_formulaire">
    <div class="container-fluid">
        <div class="row">
            <h1>Ecrivez-nous</h1>
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if(session()->has('status')): ?>
            <script>
                alert('Félicitation, votre message à bien été envoyé.');
            </script>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('status')); ?>

                    </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('save_contact')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Nom *</label>
                            <input required="required" type="text" value="<?php echo e(old('nom')); ?>" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Prénom *</label>
                            <input required="required" type="text" value="<?php echo e(old('prenom')); ?>" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Sujet *</label>
                            <input required="required" type="text" value="<?php echo e(old('sujet')); ?>" name="sujet" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Téléphone *</label>
                            <input required="required" type="text" value="<?php echo e(old('telephone')); ?>" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Adresse email *</label>
                            <input required="required" type="email" value="<?php echo e(old('email')); ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message *</label>
                                <textarea required="required" name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contenu_site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\agenceweb\resources\views/contacts.blade.php ENDPATH**/ ?>
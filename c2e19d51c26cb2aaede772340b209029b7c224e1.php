
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('style_devis'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/css_site/style_blog.css')); ?>">
<?php $__env->stopSection(); ?>
<section class="section_blog_header">
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="animate__animated animate__zoomIn">Demandez votre devis</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section class="section_blog_section1">
    <div class="container">
        <div class="row">
            <h1>Demande de devis gratuit/sites web/ applications web & mobiles/ applications desktop<br>
            Tarif, prix et estimation en ligne</h1>
            <p>
            Vous avez un projet ? Souhaitez vous obtenir un prix ? Ou une estimation ?
            Vous avez besoin de mettre en place un cahier de charges ? Nous pouvons le réaliser pour vous
            </p>
            <hr>
            <div class="col-md-12">
                <h2>Remplissez votre demande de devis</h2>
                <p>Après avoir bien remplis votre demande de devis et après validation, un document PDF vous sera
                    envoyé par votre adresse email.
                </p>
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
                alert('Félicitation, la demande de votre devis à bien été envoyée');
            </script>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('status')); ?>

                    </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('save_devis')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Informations diverses
                        </div>
                        <div class="card-body">
                            <label for="">Comment vous nous avez connu ?</label>
                            <select required="required" class="form-select form-select-lg" aria-label=".form-select-sm example" name="info">
                                <option selected></option>
                                <option value="Sur facebook">Sur facebook</option>
                                <option value="Sur instagram">Sur instagram </option>
                                <option value="Sur google">Sur google</option>
                                <option value="Sur linkedin">Sur linkedin</option>
                                <option value="Chez un proche">Chez un proche</option>
                                <option value="Chez un partenaire">Chez un partenaire</option>
                                <option value="Autres">Autres</option>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-user" aria-hidden="true"></i> Informations personnelles
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label for="nom">Nom *</label>
                                    <input required="required" name="nom" value="<?php echo e(old('nom')); ?>" class="form-control form-control-lg" type="text" placeholder="Nom " aria-label=".form-control-sm example">
                                </div>
                                <div class="col">
                                    <label for="nom">Prénom *</label>
                                    <input name="prenom" class="form-control form-control-lg" type="text" placeholder="Prénom " aria-label=".form-control-sm example">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="nom">Adresse email *</label>
                                    <input required="required" name="email" class="form-control form-control-lg" type="text" placeholder="Adresse email " aria-label=".form-control-sm example">
                                </div>
                                <div class="col">
                                    <label for="nom">Téléphone *</label>
                                    <input required="required" name="telephone" class="form-control form-control-lg" type="text" placeholder="Téléphone" aria-label=".form-control-sm example">
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col">
                                        <label for="nom">Adresse *</label>
                                        <input required="required" name="adresse" class="form-control form-control-lg" type="text" placeholder="Adresse" aria-label=".form-control-sm example">
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <label for="nom">Ville *</label>
                                    <input required="required" name="ville" class="form-control form-control-lg" type="text" placeholder="Ville" aria-label=".form-control-sm example">
                                </div>
                                <div class="col">
                                <label for="nom">Code postal *</label>
                                    <input required="required" name="code" class="form-control form-control-lg" type="text" placeholder="Code postal " aria-label=".form-control-sm example">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-archive" aria-hidden="true"></i> Informations societé
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label for="nom">Societé *</label>
                                    <input required="required" name="societe" class="form-control form-control-lg" type="text" placeholder="Societé " aria-label=".form-control-sm example">
                                </div>
                                <div class="col">
                                    <label for="nom">site web *</label>
                                    <input required="required" placeholder="http://votresite.com" name="site" class="form-control form-control-lg" type="url" placeholder="Site web " aria-label=".form-control-sm example">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demande de devis
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label for="nom">Date projet *</label>
                                    <input required="required" name="date" class="form-control form-control-lg" type="date" placeholder=" " aria-label=".form-control-sm example">
                                </div>
                                <div class="col">
                                    <label for="nom">Budget *</label>
                                    <input required="required" name="budget" class="form-control form-control-lg" type="text" placeholder="Budget" aria-label=".form-control-sm example">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="nom">Objet du devis *</label>
                                    <input required="required" name="objet" class="form-control form-control-lg" type="text" placeholder="Objet du devis" aria-label=".form-control-sm example">
                                </div>
                                <div class="col">
                                    <label for="nom">Document relatif au projet (pdf) *</label>
                                    <input required="required" name="fichier" class="form-control form-control-lg" type="file"  aria-label=".form-control-sm example">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleFormControlTextarea1" class="form-label">Informations & description de votre projet</label>
                                    <textarea required="required" class="form-control textarea" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Valider la demande de devis</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contenu_site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\agenceweb\resources\views/blogs.blade.php ENDPATH**/ ?>
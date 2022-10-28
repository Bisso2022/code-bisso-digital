
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
   <h1>Devis-Contenu</h1>
  </div>
  <div class="card-body">
   <div class="row">
        <?php if(session()->has('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('status')); ?>

            </div>
        <?php endif; ?>
       <?php if(isset($devis->id)): ?>
       <h5>informations sur le contenu du devis</h5><hr>
        <div class="col-md-5" >
            <p>Informations personnelles du client</p>
            <ul>
                <li>Nom : <?php echo e($devis->nom); ?></li>
                <li>Prénom : <?php echo e($devis->prenom); ?></li>
                <li>Téléphone : <?php echo e($devis->telephone); ?></li>
                <li>Emai : <?php echo e($devis->email); ?></li>
                <li>Ville : <?php echo e($devis->ville); ?></li>
                <li>Code Postal : <?php echo e($devis->code_postal); ?></li>
                <li>Adresse : <?php echo e($devis->adresse); ?></li>
            </ul>
            <hr>
            <p>Motifis de demande de devis</p>
            <ul>
                <li>Sujet de devis : <?php echo e($devis->objet_devis); ?></li>
                <li>Message : <?php echo e($devis->message); ?></li>
                <hr>
                <li>Date contact : <?php echo e($devis->created_at); ?></li>
            </ul>
            <hr>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <p>Le canal de connaissance de Bisso Digital</p>
            <ul>
                <li>J'ai connu Bisso Digital grâce  : <?php echo e($devis->info); ?></li>
            </ul>
            <hr>
            <p>Information sur la societé</p>
            <ul>
                <li>Nom : <?php echo e($devis->societe); ?></li>
                <li>Site web : <a target="_bank" href="<?php echo e($devis->site_web); ?>">site web</a></li>
            </ul>
            <hr>
            <p>Information sur le projet</p>
            <ul>
                <li>Date projet : <?php echo e($devis->date_projet); ?></li>
                <li>Budget projet : <?php echo e($devis->budget); ?></li>
                <li>Objet du devis : <?php echo e($devis->objet); ?></li>
            </ul>
            <p>Document envoyer lors de la demande</p>
            <ul>
                <li>Support Pdf* : <a  target="_bank" href="<?php echo e(asset($devis->document)); ?>">Voir le support</a></li>
            </ul>
        </div>
       <?php else: ?>
       <h5>Pas de resultat possible</h5>
       <?php endif; ?>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
        } );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\agenceweb\resources\views/dossier_devis.blade.php ENDPATH**/ ?>
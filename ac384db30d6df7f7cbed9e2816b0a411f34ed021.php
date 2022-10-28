
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
   <h1>Message-Contenu</h1>
  </div>
  <div class="card-body">
   <div class="row">
        <?php if(session()->has('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('status')); ?>

            </div>
        <?php endif; ?>
       <?php if(isset($contact->id)): ?>
       <h5>informations sur le contenu du message</h5><hr>
        <div class="col-md-1"></div>
        <div class="col-md-5 " >
            <ul>
                <li>Nom : <?php echo e($contact->nom); ?></li>
                <li>Prénom : <?php echo e($contact->prenom); ?></li>
                <li>Téléphone : <?php echo e($contact->telephone); ?></li>
                <li>Email : <?php echo e($contact->email); ?></li>
                <li>Date : <?php echo e($contact->created_at); ?></li>
            </ul>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <ul>
                <li>Sujet : <?php echo e($contact->sujet); ?></li><hr>
                <li>Message : <?php echo e($contact->message); ?></li><hr>
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
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\agenceweb\resources\views/dossier_message.blade.php ENDPATH**/ ?>
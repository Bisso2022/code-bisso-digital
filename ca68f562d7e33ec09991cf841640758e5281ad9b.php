
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
   <h1>Messages</h1>
  </div>
  <div class="card-body">
   <div class="row">
        <?php if(session()->has('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('status')); ?>

            </div>
        <?php endif; ?>
   <table id="example" class="table table-bordered table-hover " style="width:100%">
        <thead>
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Téléphone</td>
                <td>Email</td>
                <td>Date</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($value->nom); ?></td>
                <td><?php echo e($value->prenom); ?></td>
                <td><?php echo e($value->telephone); ?></td>
                <td><?php echo e($value->email); ?></td>
                <td><?php echo e($value->created_at); ?></td>
                <td class="text-center"><a href="/details-message/<?php echo e($value->id); ?> "><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                <a href="/contenu-message/<?php echo e($value->id); ?>"><button type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
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
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\agenceweb\resources\views/message.blade.php ENDPATH**/ ?>
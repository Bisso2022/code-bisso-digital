
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
   <h1>Utilisateurs</h1>
  </div>
  <div class="card-body">
    <a href="<?php echo e(route('register')); ?>"><button type="button" class="btn btn-primary">Enregistrer un user</button></a>
   <div class="row">
   <table id="example" class="table table-bordered table-hover " style="width:100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Date Inscription</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($value->name); ?></td>
                <td><?php echo e($value->email); ?></td>
                <td><?php echo e($value->role); ?></td>
                <td><?php echo e($value->created_at); ?></td>
                <td>
                <a href=""><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                <a href=""><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
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
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\agenceweb\resources\views/utilisateur.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard">
        <div class="container">
            <h2>Dashboard</h2>
            <div class="row">
                <?php echo e($admin); ?>

                <div class="col-md-6">
                    <form action="/admin" method="post" enctype="multipart/form-data">
                        <input type="text" name="product" value="testing">
                        <input type="file" name="image">
                        <input type="submit" value="Goo!" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/khani/Sites/ecommvc/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>
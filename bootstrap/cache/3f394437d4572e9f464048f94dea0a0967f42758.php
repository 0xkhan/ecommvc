<?php $__env->startSection('title', 'Product Categories'); ?>

<?php $__env->startSection('content'); ?>
    <style>
        tr, td {
            padding: .5rem .3rem;
            background-color: #f2f2f4;
        }
    </style>
    <div class="category">
        <div class="container">
            <h2>Product Categories</h2>

            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="input-group-field" placeholder="Search by name">
                            <input type="submit" class="button" value="Search">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="/admin/product/categories" method="post">
                        <div class="input-group">
                            <input type="text" class="input-group-field" name="name" placeholder="Category Name">
                            <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRFToken::_token()); ?>">
                            <input type="submit" class="button" value="Create">
                        </div>
                    </form>
                </div>
            </div>

            <div class="row" style="margin-top: 3rem;">
                <div class="col-md-12">
                    <?php if(count($categories)): ?>
                        <table width="100%">
                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->slug); ?></td>
                                        <td><?php echo e($category->created_at->toFormattedDateString()); ?></td>
                                        <td width="100" class="text-right">
                                            <span data-tooltip tabindex="1" class="has-tip top" title="Add Subcategory">
                                                <a style="padding-right:10px;" data-open="add-subcategory-<?php echo e($category['id']); ?>">&#10133;</a>
                                            </span>
                                            <span data-tooltip tabindex="1" class="has-tip top" title="Edit Category">
                                                <a style="padding-right:10px;" data-open="item-<?php echo e($category['id']); ?>">&#128221;</a>
                                            </span>
                                            <span style="display:inline-block;" data-tooltip tabindex="1" class="has-tip top" title="Delete Category">
                                                <form method="post" action="/admin/product/categories/<?php echo e($category['id']); ?>/delete" class="delete-item">
                                                    <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRFToken::_token()); ?>">
                                                    <button type="submit"><i class="delete">&#10060;</i></button>
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <h3>You have not created any categories!</h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/khani/Sites/ecommvc/resources/views/admin/products/categories.blade.php ENDPATH**/ ?>
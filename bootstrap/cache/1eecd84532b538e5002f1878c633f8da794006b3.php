<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SEO -->
        <title>Admin Panel - <?php echo $__env->yieldContent('title'); ?></title>

        <!-- CSS -->
        <link rel="stylesheet" type='text/css' media='all' href="/css/main.css?v=<?php echo microtime(); ?>">
    </head>
    <body>
        <?php echo $__env->make('includes.admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="off-canvas-content" data-off-canvas-content>
            <!-- Your page content lives here -->
            <div class="title-bar" style="margin-bottom: 3rem;">
              <div class="title-bar-left">
                <button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
                <span class="title-bar-title"><?php echo e($_ENV['APP_NAME']); ?></span>
              </div>
            </div>

            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script src="/js/main.js"></script>
    </body>
</html>

<?php /**PATH /Users/khani/Sites/ecommvc/resources/views/admin/layout/base.blade.php ENDPATH**/ ?>
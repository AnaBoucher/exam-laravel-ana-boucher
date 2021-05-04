

<?php $__env->startSection('title', 'Task Information'); ?>

<?php $__env->startSection('main'); ?>
    <div class="task-list">
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <h3><?php echo e($tasks->title); ?></h3>
                    <p><?php echo e($tasks->description); ?></p>
                    <p><?php echo e(\Carbon\Carbon::parse($tasks->created_at)->format('l d F Y, H:m')); ?></p>
                </div>
                <div class="card-footer">
                    <a href="/task/<?php echo e($tasks->id); ?>/delete" class="card-footer-item">Delete Task ></a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\assessment-laravel-install\resources\views/show.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'List of Tasks'); ?>

<?php $__env->startSection('main'); ?>
	<div class="task-list">
		<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3><?php echo e($task->title); ?></h3>
				</div>
			</div>
			<div class="card-footer">
				<a href="/task/<?php echo e($task->id); ?>" class="card-footer-item">Show task ></a>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mark/odrive/Google Drive - Pro/Freelance/CAWEB/2021/CAWEB/Pres/M2S2 Developpement Back-End/Assessment/laravel-test-version/resources/views/index.blade.php ENDPATH**/ ?>
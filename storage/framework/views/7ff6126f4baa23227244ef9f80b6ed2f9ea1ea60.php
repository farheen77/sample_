<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if(session('info')): ?>
<div class="alert alert-success">
	<?php echo e(session('info')); ?>

	</div>
<?php endif; ?>
    <table class="table table-striped table-hover">
      <thead>
<tr>
<th>ID</th>
<th>Post Title</th>
<th>Post Description</th>
<th>Author<th>
<th>Keywords<th>
<th>Action</th>

	</tr>
	</thead>
	<tbody>
	<?php if(count($articles) > 0): ?>
	<?php $__currentLoopData = $articles->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	
<td><?php echo e($article->id); ?></td>
<td><?php echo e($article->title); ?></td>
<td><?php echo e($article->description); ?></td>
<td><?php echo e($article->author); ?></td>
<td><?php echo e($article->keywords); ?></td>

<td></td>

<td><?php echo e($article->action); ?></td>
<td>

<a href='<?php echo e(url("/read/{$article->id}")); ?>' class="read" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="read">&#xE86D;</i></a>

<a href='<?php echo e(url("/update/{$article->id}")); ?>' class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

<a href='<?php echo e(url("/delete/{$article->id}")); ?>' class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
</td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php endif; ?>
        
      </tbody>
    </table>
  </div>
</div>
<!-- Edit Modal HTML -->
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
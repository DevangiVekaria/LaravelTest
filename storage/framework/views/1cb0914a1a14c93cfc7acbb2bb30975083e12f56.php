<?php $__env->startSection('content'); ?>
	<div class="row">&nbsp;</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="float:left">
                <h2>PDF Test</h2>
            </div>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

	
    <form method="post" id="productForm" enctype="multipart/form-data" action="<?php echo e(route('pdf.store')); ?>" data-parsley-validate class="form-horizontal form-label-left">
<?php echo e(csrf_field()); ?>

<div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                <button type="submit" class="btn btn-primary">Generate PDF</button>
        </div>
    </div>
   </form>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
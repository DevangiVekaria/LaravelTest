<?php $__env->startSection('content'); ?>

<div class="row">&nbsp;</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="float:left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right" style="float:right">
                <a class="btn btn-primary" href="<?php echo e(route('products.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

	
    <form method="post" id="productForm" enctype="multipart/form-data" action="<?php echo e(route('products.store')); ?>" data-parsley-validate class="form-horizontal form-label-left">
<?php echo e(csrf_field()); ?>

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Product Name:</strong>
                <?php echo Form::text('product_name', null, 
                array('placeholder' => 'Product Name',
                'class' => 'form-control',
                'required'
                )); ?>

                <?php if($errors->has('product_name')): ?>
                                <span class="help-block"><?php echo e($errors->first('product_name')); ?></span>
                                <?php endif; ?>
            </div>
        </div>
		</div>
		<div class= "row">
    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Category:</strong>
            
                
  <select class="form-control" name="category_id" required>
  <option value="">- Please select -</option>
  <?php if(count($category)): ?>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
      <option value="<?php echo e($row->id); ?>"><?php echo e($row->category_name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    
  </select> 
     
                        
    </div>
</div>
</div>
		<div class= "row">
    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Image:</strong>
        
        <input id="image" type="file" class="form-control" name="image" required>
    </div>
</div>
</div>

		<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Status:</strong>
				<?php echo Form::select('status', ['1' => 'Active', '0' => 'Inactive'],null, 
                array('placeholder' => 'Status','class' => 'form-control',
                'required')); ?>

				
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   </form>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Create part <a href="<?php echo e(route('parts.index')); ?>" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="<?php echo e(route('parts.store')); ?>" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Part Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="<?php echo e(Request::old('name') ?: ''); ?>" id="name" name="name" class="form-control col-md-7 col-xs-12">
                                <?php if($errors->has('name')): ?>
                                <span class="help-block"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                                <button type="submit" class="btn btn-success">Create Part</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
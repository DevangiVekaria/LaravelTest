<?php if(count($errors) > 0): ?>
    <div>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(Session::has('info')): ?>
<div class="clearfix"></div>
<div class="alert alert-info" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php echo Session::get('info'); ?>

</div>
<?php endif; ?>

<?php if(Session::has('success')): ?>
<div class="clearfix"></div>
<div class="alert alert-success" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php echo Session::get('success'); ?>

</div>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
<div class="clearfix"></div>
<div class="alert alert-warning" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php echo Session::get('warning'); ?>

</div>
<?php endif; ?>

<?php if(Session::has('error')): ?>
<div class="clearfix"></div>
<div class="alert alert-danger" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php echo Session::get('error'); ?>

</div>
<?php endif; ?>
    <table id="datatable-buttons" class="table table-striped table-bordered">
        <tr>
        <th>Product Name</th>
            <th>Category Name</th>
            
            <th>Image</th>
            <th>Status</th>
            <th>Created Date</th>
        </tr>
        <?php if(count($product) > 0 ): ?>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($product->product_name); ?></td>
    <td><?php echo e($product->category->category_name); ?></td>
        <td><img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product->image); ?>" height="50px" width="50px"></td>
     
        
         <td> <?php if($product->status == '1'): ?> Active <?php else: ?> Inactive <?php endif; ?></td>
         <td><?php echo e(date('F d, Y', strtotime($product->created_date))); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <tr><td colspan="5" class="text-center">No Record Found!! </td> </tr>
    <?php endif; ?>
    
    
    </table>
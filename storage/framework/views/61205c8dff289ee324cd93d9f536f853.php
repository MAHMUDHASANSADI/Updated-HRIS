
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Organogram')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Organogram')); ?></li>
<?php $__env->stopSection(); ?>
<body>
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <h3 class="text-center text-primary fs-3">
            Company Hiararchy Tree
            </h3>
        </div>
        <div class="tree justify-content-center d-flex shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <ul>
                <li>
                    <a href="#">CEO</a>
                    <ul>
                        <li>
                            <a href="#">CTO</a>
                            <ul>
                                <li><a href="#">Dev Team Lead</a></li>
                                <li><a href="#">QA Team Lead</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">CFO</a>
                            <ul>
                                <li><a href="#">Account Manager</a></li>
                                <li><a href="#">Finance Analyst</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">COO</a>
                            <ul>
                                <li><a href="#">Operations Manager</a></li>
                                <li><a href="#">Logistics Manager</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</body>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Updated-HRIS\resources\views/organogram/organogram.blade.php ENDPATH**/ ?>
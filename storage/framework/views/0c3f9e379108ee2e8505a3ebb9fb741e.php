<?php $__env->startSection('title'); ?>
    <?php echo e(__('Verify Email')); ?>

<?php $__env->stopSection(); ?>
<?php
    $logo = asset(Storage::url('uploads/logo/'));
    if (empty($lang)) {
        $lang = Utility::getValByName('default_language');
    }
?>

<?php $__env->startSection('language-bar'); ?>
    <?php $__currentLoopData = \App\Models\Utility::languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(url('/verify-email', $code)); ?>" tabindex="0"
            class="dropdown-item <?php if($lang == $code): ?> text-primary <?php endif; ?>">
            <span><?php echo e(ucfirst($language)); ?></span>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-body">
        <?php if(session('status') == 'verification-link-sent'): ?>
            <div class="mb-4 font-medium text-sm text-green-600 text-primary">
                <?php echo e(__('A new verification link has been sent to the email address you provided during registration.')); ?>

            </div>
        <?php endif; ?>
        <div class="mb-4 text-sm text-gray-600">
            <?php echo e(__('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.')); ?>

        </div>
        <form method="POST" action="<?php echo e(route('verification.send')); ?>">
            <?php echo csrf_field(); ?>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary mt-2">
                    <?php echo e(__('Resend Verification Email')); ?>

                </button>
            </div>
        </form>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>

            <button type="submit" class="btn btn-danger btn-sm mt-2">
                <?php echo e(__('Logout')); ?>

            </button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HRM\resources\views/auth/verify-email.blade.php ENDPATH**/ ?>
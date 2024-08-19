


<?php $__env->startSection('content'); ?>
<form  class="shadow p-3 mb-5 bg-white rounded " action="<?php echo e(url('salary-deduction')); ?>" method="get">
        <select name="employee_id" id="employee_id">
            <option value="<?php echo e(null); ?>">Choose an Employee</option>
            <?php if(isset($employees[0])): ?>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($employee->id); ?>" <?php echo e(request()->get('employee_id') == $employee->id ? 'selected' : ''); ?>><?php echo e($employee->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </select>
                
                    
                <input class='date' type="date" name="from" id="from" value="<?php echo e(request()->get('from')); ?>"/>
                        <input class='date' type="date" name="to" id="to" value="<?php echo e(request()->get('to')); ?>"/>

                        <button type="submit">Calculate</button>

                
    </form>


    <div class="shadow p-3 mb-5 bg-white rounded " >
    <h4 class="font-color">Salary Deduction for Employee </h1>
    <p>Late or Early Count: <?php echo e(isset($deduction['late_or_early_count']) ? $deduction['late_or_early_count'] : ''); ?></p>
    <p>Salary Deduction:  <?php echo e(isset($deduction['salary_deduction']) ? $deduction['salary_deduction'] : ''); ?> day(s)</p>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HRM\resources\views/SalaryDeduction/salaryDeduction.blade.php ENDPATH**/ ?>
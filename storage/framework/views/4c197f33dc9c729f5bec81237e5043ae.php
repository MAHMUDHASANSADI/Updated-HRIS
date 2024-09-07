


<?php $__env->startSection('content'); ?>
<style>
    #from{
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    #to{
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 20px;
    }
</style>
<form  class="shadow p-3 mb-5 bg-white rounded " action="<?php echo e(url('salary-deduction')); ?>" method="get">
        <select class="select-employee" name="employee_id" id="employee_id">
            <option value="<?php echo e(null); ?>">Choose an Employee</option>
            <?php if(isset($employees[0])): ?>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($employee->id); ?>" <?php echo e(request()->get('employee_id') == $employee->id ? 'selected' : ''); ?>><?php echo e($employee->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </select>
                
                    
                <input class='day-count' type="date" name="from" id="from" value="<?php echo e(request()->get('from')); ?>"/>
                <input class="day-count" type="date" name="to" id="to" value="<?php echo e(request()->get('to')); ?>"/>

                    <button class='button-calculate' type="submit">Calculate</button>

                
    </form>


    <div class="shadow p-3 mb-5 bg-white rounded " >
        <h4 class="font-color">Salary Deduction for Employee </h1>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Week</th>
                <th>Late or Early Count</th>
                <th>Salary Deduction</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($deductions[0])): ?>
            <?php $__currentLoopData = $deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deduction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($deduction['first_day']); ?> to <?php echo e($deduction['last_day']); ?></td>
                <td><?php echo e($deduction['lateOrEarlyCount']); ?></td>
                <td><?php echo e($deduction['salaryDeduction']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
        <tfoot>
         
            <tr>
                <td>Total</td>
                <td><?php echo e(collect($deductions)->sum('lateOrEarlyCount')); ?></td>
                <td><?php echo e(collect($deductions)->sum('salaryDeduction')); ?></td>
            </tr>
        </tfoot>
        </table>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HRM\resources\views/SalaryDeduction/salaryDeduction.blade.php ENDPATH**/ ?>
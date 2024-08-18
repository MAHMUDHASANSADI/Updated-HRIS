<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Deduction</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/salarydeduction.css')); ?>">
</head>
<body>
    <select name="employee_id" id="employee_id" onchange="window.open('<?php echo e(url('salary-deduction')); ?>?employee_id='+$('#employee_id').val(), '_parent')">
        <option value="<?php echo e(null); ?>">Choose an Employee</option>
        <?php if(isset($employees[0])): ?>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($employee->id); ?>" <?php echo e(request()->get('employee_id') == $employee->id ? 'selected' : ''); ?>><?php echo e($employee->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </select>
    <h1 class="font-color">Salary Deduction for Employee </h1>
    <p>Late or Early Count: <?php echo e(isset($deduction['late_or_early_count']) ? $deduction['late_or_early_count'] : ''); ?></p>
    <p>Salary Deduction:  <?php echo e(isset($deduction['salary_deduction']) ? $deduction['salary_deduction'] : ''); ?> day(s)</p>

    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH D:\laragon\www\HRM\resources\views/SalaryDeduction/salaryDeduction.blade.php ENDPATH**/ ?>
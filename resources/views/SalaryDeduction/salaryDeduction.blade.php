<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Deduction</title>
    <link rel="stylesheet" href="{{ asset('css/salarydeduction.css') }}">
</head>
<body>
    <select name="employee_id" id="employee_id" onchange="window.open('{{ url('salary-deduction') }}?employee_id='+$('#employee_id').val(), '_parent')">
        <option value="{{ null }}">Choose an Employee</option>
        @if(isset($employees[0]))
        @foreach($employees as $employee)
        <option value="{{ $employee->id }}" {{ request()->get('employee_id') == $employee->id ? 'selected' : ''}}>{{ $employee->name }}</option>
        @endforeach
        @endif
    </select>
    <h1 class="font-color">Salary Deduction for Employee </h1>
    <p>Late or Early Count: {{ isset($deduction['late_or_early_count']) ? $deduction['late_or_early_count'] : '' }}</p>
    <p>Salary Deduction:  {{ isset($deduction['salary_deduction']) ? $deduction['salary_deduction'] : '' }} day(s)</p>

    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
</body>
</html>

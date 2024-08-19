
@extends('layouts.admin')

@section('content')
<form  class="shadow p-3 mb-5 bg-white rounded " action="{{ url('salary-deduction') }}" method="get">
        <select name="employee_id" id="employee_id">
            <option value="{{ null }}">Choose an Employee</option>
            @if(isset($employees[0]))
            @foreach($employees as $employee)
            <option value="{{ $employee->id }}" {{ request()->get('employee_id') == $employee->id ? 'selected' : ''}}>{{ $employee->name }}</option>
            @endforeach
            @endif
        </select>
                
                    
                <input class='date' type="date" name="from" id="from" value="{{ request()->get('from') }}"/>
                        <input class='date' type="date" name="to" id="to" value="{{ request()->get('to') }}"/>

                        <button type="submit">Calculate</button>

                
    </form>


    <div class="shadow p-3 mb-5 bg-white rounded " >
    <h4 class="font-color">Salary Deduction for Employee </h1>
    <p>Late or Early Count: {{ isset($deduction['late_or_early_count']) ? $deduction['late_or_early_count'] : '' }}</p>
    <p>Salary Deduction:  {{ isset($deduction['salary_deduction']) ? $deduction['salary_deduction'] : '' }} day(s)</p>
    </div>
    
@endsection


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


    <div clasuction: s="shadow p-3 mb-5 bg-white rounded " >
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
            @if(isset($deductions[0]))
            @foreach($deductions as $deduction)
            <tr>
                <td>{{ $deduction['first_day'] }} to {{ $deduction['last_day'] }}</td>
                <td>{{ $deduction['lateOrEarlyCount'] }}</td>
                <td>{{ $deduction['salaryDeduction'] }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td>Total</td>
                <td>{{ collect($deductions)->sum('lateOrEarlyCount') }}</td>
                <td>{{ collect($deductions)->sum('salaryDeduction') }}</td>
            </tr>
        </tfoot>
    </table>
    </div>
    
@endsection

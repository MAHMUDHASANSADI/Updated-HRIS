@extends('layouts.admin')
@section('content')
@section('page-title')
    {{ __('Manage Organogram') }}
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
    <li class="breadcrumb-item">{{ __('Organogram') }}</li>
@endsection
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
@endsection


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
<div class="container shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="row">
        <div class="col-12">
            <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <h3 class="text-center text-primary fs-3">
                    Company Hierarchy Tree
                </h3>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="tree justify-content-center d-flex shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <ul class="list-unstyled">
                    <li>
                        <a href="#" class="d-block text-center">CEO</a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="d-block text-center">CTO</a>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="d-block text-center">Dev Team Lead</a></li>
                                    <li><a href="#" class="d-block text-center">QA Team Lead</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="d-block text-center">CFO</a>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="d-block text-center">Account Manager</a></li>
                                    <li><a href="#" class="d-block text-center">Finance Analyst</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="d-block text-center">COO</a>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="d-block text-center">Operations Manager</a></li>
                                    <li><a href="#" class="d-block text-center">Logistics Manager</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
@endsection


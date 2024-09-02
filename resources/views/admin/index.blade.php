@extends('admin.template.base')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('APP_NAME') }}</a></li>
                            <li class="breadcrumb-item active">@lang('admin/dashboard.title')</li>
                        </ol>
                    </div>
                    <h4 class="page-title">@lang('admin/dashboard.title')</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <x-alert></x-alert>

        <div class="row">
            <div class="col-xxl-4 col-sm-12">
                <div class="card widget-flat text-bg-pink">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="ri-eye-line widget-icon"></i>
                        </div>
                        <h6 class="text-uppercase mt-0">
                            @lang('admin/template.sidebar.administrator')
                        </h6>
                        <h2 class="my-2">{{ $administrators_count }}</h2>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-xxl-4 col-sm-12">
                <div class="card widget-flat text-bg-purple">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="ri-wallet-2-line widget-icon"></i>
                        </div>
                        <h6 class="text-uppercase mt-0">
                            @lang('admin/template.sidebar.drug')
                        </h6>
                        <h2 class="my-2">{{ $drugs_count }}</h2>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-xxl-4 col-sm-12">
                <div class="card widget-flat text-bg-info">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="ri-shopping-basket-line widget-icon"></i>
                        </div>
                        <h6 class="text-uppercase mt-0">
                            @lang('admin/template.sidebar.article')
                        </h6>
                        <h2 class="my-2">{{ $articles_count }}</h2>
                    </div>
                </div>
            </div> <!-- end col-->
        </div>

    </div>
@endsection

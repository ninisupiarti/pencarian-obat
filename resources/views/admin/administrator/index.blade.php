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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                            <li class="breadcrumb-item active">@lang('admin/administrator.title')</li>
                        </ol>
                    </div>
                    <h4 class="page-title">@lang('admin/administrator.title')</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <x-alert></x-alert>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h6 class="header-title">@lang('admin/administrator.table-title')</h6>

                        <a id="createButton" href="{{ url('administrators/create') }}" class="btn btn-dark rounded-pill">
                            <i class="ri-add-circle-fill"></i>
                            <span>@lang('forms.button.create')</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table datatable table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr class="bg-primary">
                                    <th class="text-center text-white" width="10">No</th>
                                    <th class="text-white" width="30"></th>
                                    <th class="text-white">@lang('admin/administrator.table.name')</th>
                                    <th class="text-white">@lang('admin/administrator.table.email')</th>
                                    <th class="text-white">@lang('admin/administrator.table.level')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($administrators as $administrator)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ url('administrators/detail', Crypt::encrypt($administrator->id)) }}"
                                                    class="btn btn-sm btn-dark">
                                                    @lang('forms.button.details')
                                                </a>
                                                <a href="{{ url('administrators/edit', Crypt::encrypt($administrator->id)) }}"
                                                    class="btn btn-sm btn-warning">
                                                    @lang('forms.button.edit')
                                                </a>
                                                <form action="{{ url('administrators/destroy') }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id" value="{{ $administrator->id }}">
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('@lang('commons.confirmation.delete')')">
                                                        @lang('forms.button.delete')
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $administrator->name }}</td>
                                        <td>{{ $administrator->email }}</td>
                                        <td>{{ $administrator->level }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->
    </div>
@endsection

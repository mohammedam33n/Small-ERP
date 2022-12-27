@extends('admin.layouts.master')

@section('title')
camps
@endsection

@section('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('adminAssets/assets/css/rtl/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>{{ trans('Camps.campss') }}</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>{{ trans('Camps.campss') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="card-header border-bottom mt-2 mb-2">
                                <a href="{{ route('admin.camps.create') }}"
                                    class="btn btn-primary">{{ trans('Camps.create_new_camps') }}</a>
                            </div>
                            <div class="card-datatable">
                                {{ $dataTable->table([
                                    'class' => 'table table-hover non-hover yajraTatable',
                                ]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @include('admin.pages.courses.model-show')

    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('adminAssets/plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminAssets/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

    {{ $dataTable->scripts() }}

    <script src="{{ asset('adminAssets/assets/js/course/custom.js') }}"></script>
@endpush

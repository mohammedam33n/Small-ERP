@extends('admin.layouts.master')

@section('title')
@endsection

@section('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <!--  END CUSTOM STYLE FILE  -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>{{ trans('sliders.slider') }}</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>{{ trans('sliders.slider') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="card-header border-bottom mt-2 mb-2">
                                <a href="{{ route('admin.slider.create') }}"
                                    class="btn btn-primary">{{ trans('sliders.create_new_slider') }}</a>
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

@endpush

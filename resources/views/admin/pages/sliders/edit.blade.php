@extends('admin.layouts.master')

@section('title')
    {{ trans('sliders.create_new_slider') }}
@endsection

@section('css')
    <link href="{{ asset('adminAssets/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
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
                                    <h4>{{ trans('sliders.create_new_slider') }}</h4>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('admin.slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="widget-content widget-content-area">
                                <div class="row">

                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon5">{{ trans('sliders.title_en') }}
                                                </span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('title_en') is-invalid @enderror" name="title_en"
                                                value="{{ old('title_en', $slider->getTranslation('title', 'en')) }}"
                                                placeholder="{{ trans('sliders.title_en_ph') }}" aria-label="Title">
                                        </div>
                                        @error('title_en')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon5">{{ trans('sliders.title_ar') }}</span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('title_ar') is-invalid @enderror" name="title_ar"
                                                value="{{ old('title_ar', $slider->getTranslation('title', 'ar')) }}"
                                                placeholder="{{ trans('sliders.title_ar_ph') }}" aria-label="Title">
                                        </div>
                                        @error('title_ar')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>{{ trans('sliders.upload_image') }} <a href="javascript:void(0)"
                                                    class="custom-file-container__image-clear"
                                                    title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file"
                                                    class="custom-file-container__custom-file__custom-file-input @error('image') is-invalid @enderror"
                                                    name="image" accept="image/*">
                                                @error('image')
                                                    <div class="error text-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    @if (isset($slider->image))
                                        <div class="col-6 col-md-4">
                                            <div class="form-group col-md-5 mb-0">
                                                <label for="name" style="color:black;font-weight:bold">Old
                                                    Image:</label>
                                                <img src="{{ asset($slider->image) }}" width="200px" height="200px"
                                                    alt="" srcset="">
                                            </div>
                                        </div>
                                    @endif

                                </div>

                            </div>
                            <div class="col mb-2">
                                <button class="btn btn-primary">{{ trans('action.submit') }}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    <script src="{{ asset('adminAssets/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
    <script>
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
@endpush
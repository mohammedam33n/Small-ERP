@extends('admin.layouts.master')

@section('title')
    {{ trans('Course.create_new_course') }}
@endsection

@section('css')
    <link href="{{ asset('adminAssets/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>{{ trans('Course.courses') }}</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>{{ trans('Course.create_new_course') }}</h4>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('admin.course.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon5">{{ trans('Course.title_en') }}
                                                </span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('title_en') is-invalid @enderror" name="title_en"
                                                value="{{ old('title_en') }}"
                                                placeholder="{{ trans('Course.title_en_ph') }}" aria-label="Title">
                                        </div>
                                        @error('title_en')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon5">{{ trans('Course.title_ar') }}</span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('title_ar') is-invalid @enderror" name="title_ar"
                                                value="{{ old('title_ar') }}"
                                                placeholder="{{ trans('Course.title_ar_ph') }}" aria-label="Title">
                                        </div>
                                        @error('title_ar')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-6">
                                        <div class="input-group mb-5">
                                            <input type="text"
                                                class="form-control @error('category') is-invalid @enderror"
                                                placeholder="{{ trans('Course.category_ph') }}" name="category"
                                                value="{{ old('category') }}" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Course.category') }}</span>
                                            </div>
                                        </div>
                                        @error('category')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="number" class="form-control @error('price') is-invalid @enderror"
                                                name="price" value="{{ old('price') }}"
                                                placeholder="{{ trans('Course.price_ph') }}"
                                                aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        @error('price')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-5">
                                            <input type="date"
                                                class="form-control @error('start_date') is-invalid @enderror"
                                                placeholder="{{ trans('Course.start_date_ph') }}" name="start_date"
                                                value="{{ old('start_date') }}" aria-label="Date"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Course.start_date') }}</span>
                                            </div>
                                        </div>
                                        @error('start_date')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-5">
                                            <input type="text"
                                                class="form-control @error('location') is-invalid @enderror"
                                                placeholder="{{ trans('Course.location_ph') }}" name="location"
                                                value="{{ old('location') }}" aria-label="Location"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Course.location') }}</span>
                                            </div>
                                        </div>

                                        @error('location')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">{{ trans('Course.body_en') }}</span>
                                            </div>
                                            <textarea class="form-control @error('body_en') is-invalid @enderror" name="body_en" aria-label="With textarea">{{ old('body_en') }}</textarea>
                                        </div>
                                        @error('body_en')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">{{ trans('Course.body_ar') }}</span>
                                            </div>
                                            <textarea class="form-control @error('body_ar') is-invalid @enderror" name="body_ar" aria-label="With textarea">{{ old('body_ar') }}</textarea>
                                        </div>
                                        @error('body_ar')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>{{ trans('Course.upload_image') }} <a href="javascript:void(0)"
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

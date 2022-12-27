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
                    <h3>{{ trans('Course.course_subscription_details') }}</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
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
                                                class="form-control @error('title_en') is-invalid @enderror" 
                                                readonly style="color: black"
                                                value="{{ old('title_en', $course->getTranslation('title', 'en')) }}"
                                                aria-label="Title">
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon5">{{ trans('Course.title_ar') }}</span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('title_ar') is-invalid @enderror"
                                                readonly style="color: black"
                                                value="{{ old('title_ar', $course->getTranslation('title', 'ar')) }}"
                                                 aria-label="Title">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">{{ trans('Course.body_en') }}</span>
                                            </div>
                                            <textarea readonly style="color: black" class="form-control @error('body_en') is-invalid @enderror" name="body_en" aria-label="With textarea">{{ old('body_en', $course->getTranslation('body', 'en')) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">{{ trans('Course.body_ar') }}</span>
                                            </div>
                                            <textarea readonly style="color: black" class="form-control @error('body_ar') is-invalid @enderror" name="body_ar" aria-label="With textarea">{{ old('body_ar', $course->getTranslation('body', 'ar')) }}</textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-6">
                                        <div class="input-group mb-5">
                                            <input type="text"
                                                class="form-control @error('category') is-invalid @enderror"
                                                readonly style="color: black"
                                                value="{{ old('category', $course->category) }}"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Course.category') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="number" class="form-control @error('price') is-invalid @enderror"
                                                value="{{ old('price', $course->price) }}"
                                                readonly style="color: black"
                                                aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">{{trans('Course.price')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-6">
                                        <div class="input-group mb-5">
                                            <input type="text"
                                                class="form-control @error('discount') is-invalid @enderror"
                                                readonly style="color: black"
                                                placeholder="{{ trans('Course.no_discount') }}"
                                                value="{{ old('discount', $subscription->discount) }}"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Course.discount') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="number" class="form-control @error('total_price') is-invalid @enderror"
                                                readonly style="color: black"
                                                 value="{{ old('total_price', $subscription->total_price) }}"
                                                aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">{{trans('Course.total_price')}}</span>
                                            </div>
                                        </div>
                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-5">
                                            <input type="date"
                                                class="form-control @error('start_date') is-invalid @enderror"
                                                readonly style="color: black"
                                                value="{{ old('start_date', $course->start_date) }}" aria-label="Date"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Course.start_date') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-5">
                                            <input type="text"
                                                class="form-control @error('location') is-invalid @enderror"
                                                readonly style="color: black"
                                                value="{{ old('location', $course->location) }}" aria-label="Location"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Course.location') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col mb-2">
                                <a href="{{route('admin.course_subscription.index')}}">
                                    <button class="btn btn-primary">{{ trans('action.back') }}</button>
                                </a>
                                </div>
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

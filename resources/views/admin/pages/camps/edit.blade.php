@extends('admin.layouts.master')

@section('title')
    {{ trans('Camps.create_new_camps') }}
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
                    <h3>{{ trans('Camps.campss') }}</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>{{ trans('Camps.create_new_camps') }}</h4>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('admin.camps.update' ,$camps->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="widget-content widget-content-area">
                              <!--  BEGIN title  -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon5">{{ trans('Camps.title_en') }}
                                                </span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('title_en') is-invalid @enderror" name="title_en"
                                                value="{{ old('title_en' , $camps->getTranslation('title', 'en'))}}"
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
                                                    id="basic-addon5">{{ trans('Camps.title_ar') }}</span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('title_ar') is-invalid @enderror" name="title_ar"
                                                value="{{ old('title_ar' , $camps->getTranslation('title', 'ar')) }}"
                                                placeholder="{{ trans('Camps.title_ar_ph') }}" aria-label="Title">
                                        </div>
                                        @error('title_ar')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               <!--  BEGIN body  -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon5">{{ trans('Camps.body_en') }}
                                                </span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('body_en') is-invalid @enderror" name="body_en"
                                                value="{{ old('body_en' , $camps->getTranslation('body','en')) }}"
                                                placeholder="{{ trans('Camps.body_en_ph') }}" aria-label="body">
                                        </div>
                                        @error('body_en')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon5">{{ trans('Camps.body_ar') }}</span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('body_ar') is-invalid @enderror" name="body_ar"
                                                value="{{ old('body_ar' , $camps->getTranslation('body','ar')) }}"
                                                placeholder="{{ trans('Camps.body_ar_ph') }}" aria-label="body">
                                        </div>
                                        @error('body_ar')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--  BEGIN category , price -->
                                <div class="row">

                                    <div class="col-6">
                                        <div class="input-group mb-5">
                                            <input type="text"
                                                class="form-control @error('category') is-invalid @enderror"
                                                placeholder="{{ trans('Camps.category_ph') }}" name="category"
                                                value="{{ old('category' , $camps->category) }}"
                                                aria-label="Recipient's username"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Camps.category') }}</span>
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
                                                name="price" 
                                                value="{{ old('price' , $camps->price) }}"
                                                placeholder="{{ trans('Camps.price_ph') }}"
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
                               <!--  BEGIN start_date , location -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-5">
                                            <input type="date"
                                                class="form-control @error('start_date') is-invalid @enderror"
                                                placeholder="{{ trans('Camps.start_date_ph') }}" name="start_date"
                                                value="{{ old('start_date' , $camps->start_date) }}" 
                                                aria-label="Date"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Camps.start_date') }}</span>
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
                                                placeholder="{{ trans('Camps.location_ph') }}" name="location"
                                                value="{{ old('location' , $camps->location) }}" 
                                                aria-label="Location"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon6">{{ trans('Camps.location') }}</span>
                                            </div>
                                        </div>

                                        @error('location')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                
                                <!--  BEGIN image -->
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>{{ trans('Camps.upload_image') }} <a href="javascript:void(0)"
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

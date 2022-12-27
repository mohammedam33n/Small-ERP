<div class="modal fade bd-example-modal-lg" id="course-modal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">


                <div class="widget-content widget-content-area">
                    <div class="text-center user-info" id="image_course">

                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            {{ trans('Course.title_en') }}
                                        </span>
                                    </div>
                                    <input type="text" class="form-control text-black" id="title_en" disabled>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            {{ trans('Course.title_ar') }}
                                        </span>
                                    </div>
                                    <input type="text" class="form-control text-black" id="title_ar" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group mb-5">
                                    <input type="text" class="form-control text-black" id="category" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon6">
                                            {{ trans('Course.category') }}
                                        </span>
                                    </div>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control text-black" id="price" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-6">
                                <div class="input-group mb-5">
                                    <input type="date" class="form-control text-black text-dark" id="start_date"
                                        disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon6">
                                            {{ trans('Course.start_date') }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-group mb-5">
                                    <input type="text" class="form-control text-black text-dark" id="location"
                                        disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon6">
                                            {{ trans('Course.location') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            {{ trans('Course.body_en') }}
                                        </span>
                                    </div>
                                    <textarea class="form-control text-black" id="body_en" disabled>
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            {{ trans('Course.body_ar') }}
                                        </span>
                                    </div>
                                    <textarea class="form-control text-black" id="body_ar" value='fdsfasasfsdsfas' disabled>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

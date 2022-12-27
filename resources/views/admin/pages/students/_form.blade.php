
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label for="name">{{ trans('student.name_en') }}</label>
                        <input type="text" class="form-control" id="name_en" name="name_en" value="{{old('name_en', isset($student) ? $student->getTranslation('name','en') : '')}}">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 mb-0">
                        <label for="name">{{ trans('student.name_ar') }}</label>
                        <input type="text" class="form-control" id="name_ar" name="name_ar" value="{{old('name_ar', isset($student) ? $student->getTranslation('name','ar') : '')}}">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>


                </div>

                <div class="form-row">

                    <div class="form-group col-md-6 mb-0">
                        <label for="phone">{{ trans('student.phone') }}</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone', $student->phone ?? '')}}">
                        @error('phone')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>

                    <div class="form-group col-md-6 mb-0">
                        <label for="attend_fees"> {{ trans('student.email') }}</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email',  $student->email ?? '')}}">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                </div>

                <button type="submit" class="btn btn-success mt-3">{{ trans('student.save') }}</button>

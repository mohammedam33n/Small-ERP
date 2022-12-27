<?php

namespace App\Http\Repositories\Admin;

use App\Models\Course;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\Admin\CourseInterface;
use App\Http\Traits\ImageTrait;

class CourseRepository implements CourseInterface
{
    use ImageTrait;
    private $courseModel;

    public function __construct(Course $course)
    {
        $this->courseModel = $course;
    }



    
    public function index($courseDataTable)
    {
        return $courseDataTable->render('admin.pages.courses.index');
    }

    public function create()
    {
        return view('admin.pages.courses.create');
    }

    public function store($request)
    {
        $fileName = $this->uploadImage($request->image, $this->courseModel::PATH);

        $this->courseModel::create([
            'title' => [
                'en' => $request->title_en,
                'ar' => $request->title_ar,
            ],
            'body' => [
                'en' => $request->body_en,
                'ar' => $request->body_ar,
            ],
            'category'   => $request->category,
            'price'      => $request->price,
            'image'      => $fileName,
            'start_date' => $request->start_date,
            'location'   => $request->location,
        ]);

        Alert::success('Course', 'Course Created Successfully');
        return redirect(route('admin.course.index'));
    }

    public function edit($course)
    {
        return view('admin.pages.courses.edit', [
            'course' => $course
        ]);
    }

    public function show($course)
    {
        return $course;
    }

    public function update($request, $course)
    {
        $fileName = $this->uploadImage($request->image, $this->courseModel::PATH, $course->image);

        $course->update(
            [
                'title' => [
                    'en' => $request->title_en,
                    'ar' => $request->title_ar,
                ],
                'body' => [
                    'en' => $request->body_en,
                    'ar' => $request->body_ar,
                ],
                'category'   => $request->category,
                'price'      => $request->price,
                'image'      => $fileName,
                'start_date' => $request->start_date,
                'location'   => $request->location,
            ]
        );

        Alert::success('Course', 'Course Updated Successfully');
        return redirect(route('admin.course.index'));
    }

    public function destroy($course)
    {
        $this->removeImage($course->image);
        $course->delete();
    }
}

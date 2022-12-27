<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserCourseInterface;
use App\Http\Traits\CourseSubscriptionTrait;
use App\Http\Traits\CourseTrait;
use App\Models\Course;
use App\Models\CourseSubscription;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class EndUserCourseRepository implements EndUserCourseInterface
{
    use CourseSubscriptionTrait, CourseTrait;
    private $courseSubscription, $course;

    public function __construct(CourseSubscription $courseSubscription, Course $course)
    {
        $this->courseSubscription = $courseSubscription;
        $this->course = $course;
    }



    public function index()
    {
        return view('endUser.pages.courses.index', [
            'courses' => $this->getAllCourses(),
        ]);
    }

    public function show($course)
    {
        return view('endUser.pages.courses.details', [
            'course' => $course,
        ]);
    }

    public function store($request)
    {
        $this->courseSubscription::create([
            'course_id'     => $request->course_id,
            'student_id'    => Auth::id(),
            'discount'      => $request->discount ?? null,
            'total_price'   => $request->total_price,
        ]);

        Alert::success('Course Subscription', 'Course Subscription Created Successfully');
        return redirect()->back();
    }
}

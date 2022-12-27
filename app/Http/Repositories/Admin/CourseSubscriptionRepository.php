<?php

namespace App\Http\Repositories\Admin;

use App\Http\Traits\CourseSubscriptionTrait;
use App\Http\Traits\CourseTrait;
use App\Models\CourseSubscription;

use App\Http\Interfaces\Admin\CourseSubscriptionInterface;
use App\Models\Course;


class CourseSubscriptionRepository implements CourseSubscriptionInterface
{
    use CourseSubscriptionTrait, CourseTrait;

    private $courseSubscription, $course;

    public function __construct(CourseSubscription $courseSubscription, Course $course)
    {
        $this->courseSubscription = $courseSubscription;
        $this->course             = $course;
    }




    public function index($courseSubscriptionDataTable)
    {
        return $courseSubscriptionDataTable->render('admin.pages.courseSubscription.index');
    }

    public function show($courseSubscription)
    {
        return view('admin.pages.courseSubscription.show', [
            'subscription' => $courseSubscription,
            'course'       => $this->getCourseById($courseSubscription->course_id),
        ]);
    }

    public function destroy($courseSubscription)
    {
        $courseSubscription->delete();
    }
}

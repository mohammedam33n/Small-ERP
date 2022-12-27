<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\EndUserCourseInterface;
use App\Http\Requests\EndUser\Course\CourseSubscriptionRequest;
use App\Models\Course;

class EndUserCourseController extends Controller
{
    private $endUserCourseInterface;

    public function __construct(EndUserCourseInterface $endUserCourseInterface)
    {
        $this->endUserCourseInterface = $endUserCourseInterface;
    }



    public function index()
    {
        return $this->endUserCourseInterface->index();
    }

    public function show(Course $camp)
    {
        return $this->endUserCourseInterface->show($camp);
    }

    public function store(CourseSubscriptionRequest $request)
    {
        return $this->endUserCourseInterface->store($request);
    }
}

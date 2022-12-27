<?php

namespace App\Http\Controllers\Admin;


use App\Models\Course;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\CourseDataTable;
use App\Http\Interfaces\Admin\CourseInterface;;

use App\Http\Requests\Admin\Course\CourseRequest;

class CourseController extends Controller
{
    private $courseInterface;

    public function __construct(CourseInterface $courseInterface)
    {
        $this->courseInterface = $courseInterface;
    }

    

    public function index(CourseDataTable $courseDataTable)
    {
        return $this->courseInterface->index($courseDataTable);
    }

    public function create()
    {
        return $this->courseInterface->create();
    }

    public function store(CourseRequest $request)
    {
        return $this->courseInterface->store($request);
    }

    public function edit(Course $course)
    {
        return $this->courseInterface->edit($course);
    }

    public function update(CourseRequest $request, Course $course)
    {
        return $this->courseInterface->update($request, $course);
    }

    public function show(Course $course)
    {
        return $this->courseInterface->show($course);
    }

    public function destroy(Course $course)
    {
        return $this->courseInterface->destroy($course);
    }
}

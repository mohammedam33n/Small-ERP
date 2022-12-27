<?php

namespace App\Http\Traits;

trait CourseTrait
{
    private function getAllCourses()
    {
        return $this->course::get();
    }

    private function getCourseById($id)
    {
        return $this->course::findOrFail($id);
    }

}

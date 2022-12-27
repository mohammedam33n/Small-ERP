<?php

namespace App\Http\Traits;

trait CourseSubscriptionTrait
{
    private function getAllCourseSubscriptions()
    {
        return $this->courseSubscription::get();
    }

    private function getCourseSubscriptionById($id)
    {
        return $this->courseSubscription::findOrFail($id);
    }

}

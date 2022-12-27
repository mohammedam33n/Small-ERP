<?php

namespace App\Http\Interfaces\Admin;

interface CourseSubscriptionInterface
{
    public function index($courseSubscriptionDataTable);
    public function show($courseSubscription);
    public function destroy($courseSubscription);
}

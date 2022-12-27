<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\DataTables\Admin\CourseSubscriptionDataTable;
use App\Http\Interfaces\Admin\CourseSubscriptionInterface;;
use App\Models\CourseSubscription;

class CourseSubscriptionController extends Controller
{
    private $courseSubscriptionInterface;

    public function __construct(CourseSubscriptionInterface $courseSubscriptionInterface)
    {
        $this->courseSubscriptionInterface = $courseSubscriptionInterface;
    }

    public function index(CourseSubscriptionDataTable $courseSubscriptionDataTable)
    {
        return $this->courseSubscriptionInterface->index($courseSubscriptionDataTable);
    }

    public function show(CourseSubscription $courseSubscription)
    {
        return $this->courseSubscriptionInterface->show($courseSubscription);
    }

    public function destroy(CourseSubscription $courseSubscription)
    {
        return $this->courseSubscriptionInterface->destroy($courseSubscription);
    }
}

<?php

namespace App\Http\Interfaces\EndUser;

interface EndUserCourseInterface
{
    public function index();
    public function show($course);
    public function store($request);
}

<?php

namespace App\Http\Interfaces\Admin;

interface CourseInterface
{
    public function index($courseDataTable);
    public function create();
    public function store($request);
    public function edit($course);
    public function show($course);
    public function update($request, $course);
    public function destroy($course);
}

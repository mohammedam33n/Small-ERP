<?php

namespace App\DataTables\Admin;

use App\Models\CourseSubscription;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class CourseSubscriptionDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable
            ->editColumn('actions', 'admin.pages.courseSubscription.datatable.actions')
            ->editColumn('course', function ($query) {
                return $query->course->title;
            })
            ->editColumn('student', function ($query) {
                return $query->student->name;
            })
            ->rawColumns(['actions']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Course $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $query = CourseSubscription::with(['course:id,title', 'student:id,name']);
        return $query;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('coursedatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->parameters([
                'dom'          => 'Blfrtip',
                'lengthMenu'   => [[10, 25, 50, -1], [10, 25, 50, 'All records']],
                'buttons'      => [
                    ['extend' => 'print', 'className' => 'btn btn-primary', 'text' => '<i class="fa fa-print mr-2"></i>Print'],
                    ['extend' => 'excel', 'className' => 'btn btn-success', 'text' => '<i class="fa fa-file ml-2"></i> Export '],

                ],
                'order' => [
                    0, 'desc'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            ['name' => 'id', 'data' => 'id', 'title' => trans('Course.id')],
            ['name' => 'course.title', 'data' => 'course', 'title' => trans('Course.course_title')],
            ['name' => 'student.name', 'data' => 'student', 'title' => trans('user.student_name')],
            ['name' => 'actions', 'data' => 'actions', 'title' => trans('Course.actions'), 'exportable' => false, 'printable' => false, 'orderable' => false, 'searchable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'CourseSubscription_' . date('YmdHis');
    }
}

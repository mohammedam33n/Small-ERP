<?php

namespace App\DataTables\Admin;

use App\Models\Course;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class CourseDataTable extends DataTable
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
            ->editColumn('actions', 'admin.pages.courses.datatables.action')
            ->editColumn('title', 'admin.pages.courses.datatables.title')
            ->rawColumns(['actions', 'title']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Course $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Course $model)
    {
        return $model->newQuery();
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
            ['name' => 'title', 'data' => 'title', 'title' => trans('Course.title')],
            ['name' => 'price', 'data' => 'price', 'title' => trans('Course.price')],
            ['name' => 'category', 'data' => 'category', 'title' => trans('Course.category')],
            ['name' => 'start_date', 'data' => 'start_date', 'title' => trans('Course.start_date')],
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
        return 'Course_' . date('YmdHis');
    }
}

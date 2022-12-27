<?php

namespace App\DataTables\Admin;

use App\Models\Student;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;


class StudentDataTable extends DataTable
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
            ->editColumn('actions', 'admin.pages.students.datatable.actions')
            ->editColumn('name', function ($query) {
                return $query->getTranslation('name', 'en') . ' | ' . $query->getTranslation('name', 'ar');
            })
            ->rawColumns(['actions']);
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Student $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Student $model)
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
            ->setTableId('studentdatatable-table')
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
    protected function getColumns()
    {
        return [
            ['name' => 'id', 'data' => 'id', 'title' => 'ID'],
            ['name' => 'name', 'data' => 'name', 'title' => 'Name'],
            ['name' => 'email', 'data' => 'email', 'title' => 'email'],
            ['name' => 'phone', 'data' => 'phone', 'title' => 'phone'],
            ['name' => 'actions', 'data' => 'actions', 'title' => 'Actions', 'exportable' => false, 'printable' => false, 'orderable' => false, 'searchable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Student_' . date('YmdHis');
    }
}

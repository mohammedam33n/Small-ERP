<?php

namespace App\DataTables\Admin;

use App\Models\Slider;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class SlidersDataTable extends DataTable
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
            ->editColumn('title', function ($query) {
                return $query->getTranslation('title', 'en') . '  |  ' . $query->getTranslation('title', 'ar');
            })
            ->editColumn('image', 'admin.pages.sliders.datatables.image')
            ->editColumn('actions', 'admin.pages.sliders.datatables.action')
            ->rawColumns(['actions', 'image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Slider $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Slider $model)
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
            ->setTableId('sliderdatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->parameters([
                'dom' => 'Blfrtip',
                'lengthMenu' => [[10, 25, 50, -1], [10, 25, 50, 'All records']],
                'buttons' => [
                    ['extend' => 'print', 'className' => 'btn btn-primary', 'text' => '<i class="fa fa-print mr-2"></i>Print'],
                    ['extend' => 'excel', 'className' => 'btn btn-success', 'text' => '<i class="fa fa-file ml-2"></i> Export '],

                ],
                'order' => [
                    0, 'desc',
                ],
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
            ['name' => 'id', 'data' => 'id', 'title' =>  trans('Sliders.id')],
            ['name' => 'title', 'data' => 'title', 'title' =>  trans('Sliders.title')],
            ['name' => 'image', 'data' => 'image', 'title' =>  trans('Sliders.image')],
            ['name' => 'actions', 'data' => 'actions', 'title' => trans('Sliders.actions'), 'exportable' => false, 'printable' => false, 'orderable' => false, 'searchable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Slider_' . date('YmdHis');
    }
}

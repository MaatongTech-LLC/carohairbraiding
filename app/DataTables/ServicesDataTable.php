<?php

namespace App\DataTables;

use App\Models\Service;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Carbon;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ServicesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->rawColumns(['user'])
            ->editColumn('name', function(Service $service) {
                return view('admin.services.columns._service', compact('service'));
            })
            ->editColumn('type', function(Service $service) {
                return ucwords($service->type);
            })
            ->editColumn('price', function(Service $service) {
                return '$' .  $service->price;
            })
            ->addColumn('category', function(Service $service) {
                return $service->category->name;
            })
            ->editColumn('duration', function(Service $service) {
                return Carbon::parse($service->duration)->format('H:i');
            })
            ->editColumn('created_at', function(Service $service) {
                return $service->created_at->diffForHumans();
            })
            ->addColumn('actions', function(Service $service) {
                return view('admin.services.columns._actions', compact('service'));
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Service $model): QueryBuilder
    {
        return $model->newQuery()->with('category')->latest();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('services-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('name')->addClass('d-flex align-items-center')->title('Service')->searchable(true),
            Column::make('type')->title('Type'),
            Column::make('price')->title('Price'),
            Column::make('category')->title('Category'),
            Column::make('duration')->title('Duration'),
            Column::computed('actions')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Services_' . date('YmdHis');
    }
}

<?php

namespace App\DataTables;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BookingsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('date', function(Booking $booking) {
                return ucwords($booking->date);
            })
            ->editColumn('time', function(Booking $booking) {
                return $booking->time;
            })
            ->addColumn('client', function(Booking $booking) {
                return $booking->user->name;
            })
            ->addColumn('service', function(Booking $booking) {
                return $booking->service->name;
            })
            ->editColumn('created_at', function(Booking $booking) {
                return $booking->created_at->format('Y-m-d');
            })
            ->addColumn('action', function(Booking $booking) {
                return sprintf('<a class="btn btn-sm btn-primary" href="%s">Show</a>', route('admin.booking.show', $booking->id));
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Booking $model): QueryBuilder
    {
        return $model->newQuery()->with(['user', 'service'])->latest('id');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('bookings-table')
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
            Column::make('date')->title('Date'),
            Column::make('time')->title('Time'),
            Column::make('client')->title('Client'),
            Column::make('service')->title('Service'),
            Column::make('created_at')->title('Booked On'),
            Column::computed('action')
                ->addClass('text-end text-nowrap')
                ->exportable(false)
                ->printable(false)
                ->width(60)
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Bookings_' . date('YmdHis');
    }
}

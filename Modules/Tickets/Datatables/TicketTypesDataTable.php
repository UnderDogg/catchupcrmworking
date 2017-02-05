<?php

namespace App\DataTables\Tickets;

use App\Models\Tickets\TicketTypes;
use Form;
use Yajra\Datatables\Services\DataTable;

class TicketTypesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'tickets.ticket_types.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $ticketTypes = TicketTypes::query();

        return $this->applyScopes($ticketTypes);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'ismaster' => ['name' => 'ismaster', 'data' => 'ismaster'],
            'ispublic' => ['name' => 'ispublic', 'data' => 'ispublic'],
            'title' => ['name' => 'title', 'data' => 'title'],
            'displayicon' => ['name' => 'displayicon', 'data' => 'displayicon'],
            'department_id' => ['name' => 'department_id', 'data' => 'department_id'],
            'displayorder' => ['name' => 'displayorder', 'data' => 'displayorder']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ticketTypes';
    }
}

<?php

namespace Modules\Core\DataTables\Core;

use App\Models\Core\SettingsTickets;
use Form;
use Yajra\Datatables\Services\DataTable;

class SettingsTicketsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'core.settings_tickets.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $settingsTickets = SettingsTickets::query();

        return $this->applyScopes($settingsTickets);
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
            'num_format' => ['name' => 'num_format', 'data' => 'num_format'],
            'num_sequence' => ['name' => 'num_sequence', 'data' => 'num_sequence'],
            'priority' => ['name' => 'priority', 'data' => 'priority'],
            'sla' => ['name' => 'sla', 'data' => 'sla'],
            'help_topic' => ['name' => 'help_topic', 'data' => 'help_topic'],
            'max_open_ticket' => ['name' => 'max_open_ticket', 'data' => 'max_open_ticket'],
            'collision_avoid' => ['name' => 'collision_avoid', 'data' => 'collision_avoid'],
            'lock_ticket_frequency' => ['name' => 'lock_ticket_frequency', 'data' => 'lock_ticket_frequency'],
            'captcha' => ['name' => 'captcha', 'data' => 'captcha'],
            'status' => ['name' => 'status', 'data' => 'status'],
            'claim_response' => ['name' => 'claim_response', 'data' => 'claim_response'],
            'assigned_ticket' => ['name' => 'assigned_ticket', 'data' => 'assigned_ticket'],
            'answered_ticket' => ['name' => 'answered_ticket', 'data' => 'answered_ticket'],
            'agent_mask' => ['name' => 'agent_mask', 'data' => 'agent_mask'],
            'html' => ['name' => 'html', 'data' => 'html'],
            'client_update' => ['name' => 'client_update', 'data' => 'client_update'],
            'max_file_size' => ['name' => 'max_file_size', 'data' => 'max_file_size']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'settingsTickets';
    }
}

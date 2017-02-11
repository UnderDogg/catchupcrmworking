<?php

namespace Modules\Tickets\DataTables\Tickets;

use App\Models\Tickets\TicketHelpTopics;
use Form;
use Yajra\Datatables\Services\DataTable;

class TicketHelpTopicsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'tickets.ticket_help_topics.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $ticketHelpTopics = TicketHelpTopics::query();

        return $this->applyScopes($ticketHelpTopics);
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
            'topic' => ['name' => 'topic', 'data' => 'topic'],
            'parent_topic' => ['name' => 'parent_topic', 'data' => 'parent_topic'],
            'custom_form' => ['name' => 'custom_form', 'data' => 'custom_form'],
            'department_id' => ['name' => 'department_id', 'data' => 'department_id'],
            'ticketstatus_id' => ['name' => 'ticketstatus_id', 'data' => 'ticketstatus_id'],
            'ticketpriority_id' => ['name' => 'ticketpriority_id', 'data' => 'ticketpriority_id'],
            'slaplan_id' => ['name' => 'slaplan_id', 'data' => 'slaplan_id'],
            'thank_page' => ['name' => 'thank_page', 'data' => 'thank_page'],
            'ticket_num_format' => ['name' => 'ticket_num_format', 'data' => 'ticket_num_format'],
            'status' => ['name' => 'status', 'data' => 'status'],
            'type' => ['name' => 'type', 'data' => 'type'],
            'auto_assign' => ['name' => 'auto_assign', 'data' => 'auto_assign'],
            'auto_response' => ['name' => 'auto_response', 'data' => 'auto_response'],
            'internal_notes' => ['name' => 'internal_notes', 'data' => 'internal_notes']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ticketHelpTopics';
    }
}

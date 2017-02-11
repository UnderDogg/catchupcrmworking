<?php

namespace Modules\Core\DataTables\Core;

use App\Models\Core\SettingsAutoResponse;
use Form;
use Yajra\Datatables\Services\DataTable;

class SettingsAutoResponseDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'core.settings_auto_responses.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $settingsAutoResponses = SettingsAutoResponse::query();

        return $this->applyScopes($settingsAutoResponses);
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
            'new_ticket' => ['name' => 'new_ticket', 'data' => 'new_ticket'],
            'agent_new_ticket' => ['name' => 'agent_new_ticket', 'data' => 'agent_new_ticket'],
            'submitter' => ['name' => 'submitter', 'data' => 'submitter'],
            'participants' => ['name' => 'participants', 'data' => 'participants'],
            'overlimit' => ['name' => 'overlimit', 'data' => 'overlimit']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'settingsAutoResponses';
    }
}

<?php

namespace Modules\Core\DataTables\Core;

use App\Models\Core\TeamAssigns;
use Form;
use Yajra\Datatables\Services\DataTable;

class TeamAssignsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'core.team_assigns.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $teamAssigns = TeamAssigns::query();

        return $this->applyScopes($teamAssigns);
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
            'name' => ['name' => 'name', 'data' => 'name'],
            'shortname' => ['name' => 'shortname', 'data' => 'shortname'],
            'relationtype_id' => ['name' => 'relationtype_id', 'data' => 'relationtype_id'],
            'language_id' => ['name' => 'language_id', 'data' => 'language_id'],
            'slaplanid' => ['name' => 'slaplanid', 'data' => 'slaplanid'],
            'slaexpirytimeline' => ['name' => 'slaexpirytimeline', 'data' => 'slaexpirytimeline']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'teamAssigns';
    }
}

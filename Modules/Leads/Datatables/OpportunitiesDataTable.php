<?php

namespace Modules\Leads\DataTables\Leads;

use Modules\Leads\Models\Opportunities;
use Form;
use Yajra\Datatables\Services\DataTable;

class OpportunitiesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'leads.opportunities.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $opportunities = Opportunities::query();

        return $this->applyScopes($opportunities);
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
            'amount' => ['name' => 'amount', 'data' => 'amount'],
            'close_date' => ['name' => 'close_date', 'data' => 'close_date'],
            'expected_revenue' => ['name' => 'expected_revenue', 'data' => 'expected_revenue'],
            'next_step' => ['name' => 'next_step', 'data' => 'next_step'],
            'probability' => ['name' => 'probability', 'data' => 'probability'],
            'competitors' => ['name' => 'competitors', 'data' => 'competitors'],
            'description' => ['name' => 'description', 'data' => 'description'],
            'lead_source_id' => ['name' => 'lead_source_id', 'data' => 'lead_source_id'],
            'stage_id' => ['name' => 'stage_id', 'data' => 'stage_id'],
            'type_id' => ['name' => 'type_id', 'data' => 'type_id'],
            'contact_id' => ['name' => 'contact_id', 'data' => 'contact_id'],
            'owner_id' => ['name' => 'owner_id', 'data' => 'owner_id'],
            'adder_id' => ['name' => 'adder_id', 'data' => 'adder_id'],
            'modifier_id' => ['name' => 'modifier_id', 'data' => 'modifier_id']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'opportunities';
    }
}

<?php

namespace App\DataTables\Relations;

use App\Models\Relations\RelationContracts;
use Form;
use Yajra\Datatables\Services\DataTable;

class RelationContractsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'relations.relation_contracts.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $relationContracts = RelationContracts::query();

        return $this->applyScopes($relationContracts);
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
            'contractname' => ['name' => 'contractname', 'data' => 'contractname'],
            'contracttype_id' => ['name' => 'contracttype_id', 'data' => 'contracttype_id'],
            'relation_id' => ['name' => 'relation_id', 'data' => 'relation_id'],
            'relationcontact_id' => ['name' => 'relationcontact_id', 'data' => 'relationcontact_id'],
            'slaplan_id' => ['name' => 'slaplan_id', 'data' => 'slaplan_id'],
            'contract_start_date' => ['name' => 'contract_start_date', 'data' => 'contract_start_date'],
            'contract_end_date' => ['name' => 'contract_end_date', 'data' => 'contract_end_date']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'relationContracts';
    }
}

<?php

namespace Modules\Relations\DataTables;

use Modules\Relations\Models\RelationCommunication;
use Form;
use Yajra\Datatables\Services\DataTable;

class RelationCommunicationDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'relations.relation_communications.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $relationCommunications = RelationCommunication::query();

        return $this->applyScopes($relationCommunications);
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
            'relation_id' => ['name' => 'relation_id', 'data' => 'relation_id'],
            'ismain' => ['name' => 'ismain', 'data' => 'ismain'],
            'communicationtype_id' => ['name' => 'communicationtype_id', 'data' => 'communicationtype_id'],
            'phonenumber' => ['name' => 'phonenumber', 'data' => 'phonenumber'],
            'mobilenumber' => ['name' => 'mobilenumber', 'data' => 'mobilenumber'],
            'faxnumber' => ['name' => 'faxnumber', 'data' => 'faxnumber'],
            'website' => ['name' => 'website', 'data' => 'website']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'relationCommunications';
    }
}

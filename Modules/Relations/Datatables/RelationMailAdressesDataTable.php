<?php

namespace App\DataTables\Relations;

use App\Models\Relations\RelationMailAdresses;
use Form;
use Yajra\Datatables\Services\DataTable;

class RelationMailAdressesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'relations.relation_mail_adresses.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $relationMailAdresses = RelationMailAdresses::query();

        return $this->applyScopes($relationMailAdresses);
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
            'isprimary' => ['name' => 'isprimary', 'data' => 'isprimary'],
            'linktype' => ['name' => 'linktype', 'data' => 'linktype'],
            'linktype_id' => ['name' => 'linktype_id', 'data' => 'linktype_id'],
            'emailaddress' => ['name' => 'emailaddress', 'data' => 'emailaddress']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'relationMailAdresses';
    }
}

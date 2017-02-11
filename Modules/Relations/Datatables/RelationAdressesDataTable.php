<?php

namespace Modules\Relations\DataTables;

use Modules\Relations\Models\RelationAdresses;
use Form;
use Yajra\Datatables\Services\DataTable;

class RelationAdressesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'relations.relation_adresses.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $relationAdresses = RelationAdresses::query();

        return $this->applyScopes($relationAdresses);
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
            'addresstype_id' => ['name' => 'addresstype_id', 'data' => 'addresstype_id'],
            'address' => ['name' => 'address', 'data' => 'address'],
            'address2' => ['name' => 'address2', 'data' => 'address2'],
            'housenumber' => ['name' => 'housenumber', 'data' => 'housenumber'],
            'housenumberaddition' => ['name' => 'housenumberaddition', 'data' => 'housenumberaddition'],
            'postalcode' => ['name' => 'postalcode', 'data' => 'postalcode'],
            'city_id' => ['name' => 'city_id', 'data' => 'city_id'],
            'country_id' => ['name' => 'country_id', 'data' => 'country_id'],
            'phone' => ['name' => 'phone', 'data' => 'phone'],
            'fax' => ['name' => 'fax', 'data' => 'fax'],
            'website' => ['name' => 'website', 'data' => 'website'],
            'dateline' => ['name' => 'dateline', 'data' => 'dateline'],
            'lastupdate' => ['name' => 'lastupdate', 'data' => 'lastupdate'],
            'languageid' => ['name' => 'languageid', 'data' => 'languageid'],
            'slaplanid' => ['name' => 'slaplanid', 'data' => 'slaplanid'],
            'slaexpirytimeline' => ['name' => 'slaexpirytimeline', 'data' => 'slaexpirytimeline'],
            'usergroupid' => ['name' => 'usergroupid', 'data' => 'usergroupid']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'relationAdresses';
    }
}

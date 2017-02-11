<?php

namespace Modules\Core\DataTables\Core;

use App\Models\Core\Companies;
use Form;
use Yajra\Datatables\Services\DataTable;

class CompaniesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'core.companies.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $companies = Companies::query();

        return $this->applyScopes($companies);
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
            'company_name' => ['name' => 'company_name', 'data' => 'company_name'],
            'website' => ['name' => 'website', 'data' => 'website'],
            'phone' => ['name' => 'phone', 'data' => 'phone'],
            'address' => ['name' => 'address', 'data' => 'address'],
            'landing_page' => ['name' => 'landing_page', 'data' => 'landing_page'],
            'offline_page' => ['name' => 'offline_page', 'data' => 'offline_page'],
            'thank_page' => ['name' => 'thank_page', 'data' => 'thank_page'],
            'logo' => ['name' => 'logo', 'data' => 'logo'],
            'use_logo' => ['name' => 'use_logo', 'data' => 'use_logo']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'companies';
    }
}

<?php

namespace App\DataTables\Taxes;

use App\Models\Taxes\TaxRates;
use Form;
use Yajra\Datatables\Services\DataTable;

class TaxRatesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'taxes.tax_rates.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $taxRates = TaxRates::query();

        return $this->applyScopes($taxRates);
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
            'company_id' => ['name' => 'company_id', 'data' => 'company_id'],
            'name' => ['name' => 'name', 'data' => 'name'],
            'user_id' => ['name' => 'user_id', 'data' => 'user_id'],
            'public_id' => ['name' => 'public_id', 'data' => 'public_id'],
            'rate' => ['name' => 'rate', 'data' => 'rate'],
            'is_inclusive' => ['name' => 'is_inclusive', 'data' => 'is_inclusive']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'taxRates';
    }
}

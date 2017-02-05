<?php

namespace App\DataTables\Products;

use App\Models\Products\Products;
use Form;
use Yajra\Datatables\Services\DataTable;

class ProductsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'products.products.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $products = Products::query();

        return $this->applyScopes($products);
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
            'user_id' => ['name' => 'user_id', 'data' => 'user_id'],
            'product_key' => ['name' => 'product_key', 'data' => 'product_key'],
            'notes' => ['name' => 'notes', 'data' => 'notes'],
            'cost' => ['name' => 'cost', 'data' => 'cost'],
            'qty' => ['name' => 'qty', 'data' => 'qty'],
            'public_id' => ['name' => 'public_id', 'data' => 'public_id'],
            'default_tax_rate_id' => ['name' => 'default_tax_rate_id', 'data' => 'default_tax_rate_id'],
            'is_deleted' => ['name' => 'is_deleted', 'data' => 'is_deleted']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'products';
    }
}

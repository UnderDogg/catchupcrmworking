<?php

namespace App\DataTables\Invoices;

use App\Models\Invoices\InvoiceItems;
use Form;
use Yajra\Datatables\Services\DataTable;

class InvoiceItemsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'invoices.invoice_items.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $invoiceItems = InvoiceItems::query();

        return $this->applyScopes($invoiceItems);
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
            'invoice_id' => ['name' => 'invoice_id', 'data' => 'invoice_id'],
            'product_id' => ['name' => 'product_id', 'data' => 'product_id'],
            'product_key' => ['name' => 'product_key', 'data' => 'product_key'],
            'notes' => ['name' => 'notes', 'data' => 'notes'],
            'cost' => ['name' => 'cost', 'data' => 'cost'],
            'qty' => ['name' => 'qty', 'data' => 'qty'],
            'tax_name1' => ['name' => 'tax_name1', 'data' => 'tax_name1'],
            'tax_rate1' => ['name' => 'tax_rate1', 'data' => 'tax_rate1'],
            'public_id' => ['name' => 'public_id', 'data' => 'public_id'],
            'custom_value1' => ['name' => 'custom_value1', 'data' => 'custom_value1'],
            'custom_value2' => ['name' => 'custom_value2', 'data' => 'custom_value2'],
            'tax_name2' => ['name' => 'tax_name2', 'data' => 'tax_name2'],
            'tax_rate2' => ['name' => 'tax_rate2', 'data' => 'tax_rate2']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'invoiceItems';
    }
}

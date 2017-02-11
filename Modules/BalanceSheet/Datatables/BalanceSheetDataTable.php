<?php

namespace Modules\BalanceSheet\DataTables;

use App\Models\Balancesheet\Expenses;
use Form;
use Yajra\Datatables\Services\DataTable;

class BalanceSheetDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'balancesheet.expenses.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $expenses = Expenses::query();

        return $this->applyScopes($expenses);
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
            'relation_id' => ['name' => 'relation_id', 'data' => 'relation_id'],
            'vendor_id' => ['name' => 'vendor_id', 'data' => 'vendor_id'],
            'user_id' => ['name' => 'user_id', 'data' => 'user_id'],
            'invoice_id' => ['name' => 'invoice_id', 'data' => 'invoice_id'],
            'is_deleted' => ['name' => 'is_deleted', 'data' => 'is_deleted'],
            'amount' => ['name' => 'amount', 'data' => 'amount'],
            'exchange_rate' => ['name' => 'exchange_rate', 'data' => 'exchange_rate'],
            'expense_date' => ['name' => 'expense_date', 'data' => 'expense_date'],
            'private_notes' => ['name' => 'private_notes', 'data' => 'private_notes'],
            'public_notes' => ['name' => 'public_notes', 'data' => 'public_notes'],
            'invoice_currency_id' => ['name' => 'invoice_currency_id', 'data' => 'invoice_currency_id'],
            'should_be_invoiced' => ['name' => 'should_be_invoiced', 'data' => 'should_be_invoiced'],
            'public_id' => ['name' => 'public_id', 'data' => 'public_id'],
            'transaction_id' => ['name' => 'transaction_id', 'data' => 'transaction_id'],
            'bank_id' => ['name' => 'bank_id', 'data' => 'bank_id'],
            'expense_currency_id' => ['name' => 'expense_currency_id', 'data' => 'expense_currency_id'],
            'expense_category_id' => ['name' => 'expense_category_id', 'data' => 'expense_category_id'],
            'tax_name1' => ['name' => 'tax_name1', 'data' => 'tax_name1'],
            'tax_rate1' => ['name' => 'tax_rate1', 'data' => 'tax_rate1'],
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
        return 'expenses';
    }
}

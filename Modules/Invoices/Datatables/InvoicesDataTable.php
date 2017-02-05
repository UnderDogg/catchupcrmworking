<?php

namespace App\DataTables\Invoices;

use App\Models\Invoices\Invoices;
use Form;
use Yajra\Datatables\Services\DataTable;

class InvoicesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'invoices.invoices.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $invoices = Invoices::query();

        return $this->applyScopes($invoices);
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
            'user_id' => ['name' => 'user_id', 'data' => 'user_id'],
            'invoice_status_id' => ['name' => 'invoice_status_id', 'data' => 'invoice_status_id'],
            'invoice_number' => ['name' => 'invoice_number', 'data' => 'invoice_number'],
            'discount' => ['name' => 'discount', 'data' => 'discount'],
            'po_number' => ['name' => 'po_number', 'data' => 'po_number'],
            'invoice_date' => ['name' => 'invoice_date', 'data' => 'invoice_date'],
            'due_date' => ['name' => 'due_date', 'data' => 'due_date'],
            'terms' => ['name' => 'terms', 'data' => 'terms'],
            'public_notes' => ['name' => 'public_notes', 'data' => 'public_notes'],
            'is_deleted' => ['name' => 'is_deleted', 'data' => 'is_deleted'],
            'is_recurring' => ['name' => 'is_recurring', 'data' => 'is_recurring'],
            'frequency_id' => ['name' => 'frequency_id', 'data' => 'frequency_id'],
            'start_date' => ['name' => 'start_date', 'data' => 'start_date'],
            'end_date' => ['name' => 'end_date', 'data' => 'end_date'],
            'last_sent_date' => ['name' => 'last_sent_date', 'data' => 'last_sent_date'],
            'recurring_invoice_id' => ['name' => 'recurring_invoice_id', 'data' => 'recurring_invoice_id'],
            'tax_name1' => ['name' => 'tax_name1', 'data' => 'tax_name1'],
            'tax_rate1' => ['name' => 'tax_rate1', 'data' => 'tax_rate1'],
            'amount' => ['name' => 'amount', 'data' => 'amount'],
            'balance' => ['name' => 'balance', 'data' => 'balance'],
            'public_id' => ['name' => 'public_id', 'data' => 'public_id'],
            'invoice_design_id' => ['name' => 'invoice_design_id', 'data' => 'invoice_design_id'],
            'invoice_type_id' => ['name' => 'invoice_type_id', 'data' => 'invoice_type_id'],
            'quote_id' => ['name' => 'quote_id', 'data' => 'quote_id'],
            'quote_invoice_id' => ['name' => 'quote_invoice_id', 'data' => 'quote_invoice_id'],
            'custom_value1' => ['name' => 'custom_value1', 'data' => 'custom_value1'],
            'custom_value2' => ['name' => 'custom_value2', 'data' => 'custom_value2'],
            'custom_taxes1' => ['name' => 'custom_taxes1', 'data' => 'custom_taxes1'],
            'custom_taxes2' => ['name' => 'custom_taxes2', 'data' => 'custom_taxes2'],
            'is_amount_discount' => ['name' => 'is_amount_discount', 'data' => 'is_amount_discount'],
            'invoice_footer' => ['name' => 'invoice_footer', 'data' => 'invoice_footer'],
            'partial' => ['name' => 'partial', 'data' => 'partial'],
            'has_tasks' => ['name' => 'has_tasks', 'data' => 'has_tasks'],
            'auto_bill' => ['name' => 'auto_bill', 'data' => 'auto_bill'],
            'custom_text_value1' => ['name' => 'custom_text_value1', 'data' => 'custom_text_value1'],
            'custom_text_value2' => ['name' => 'custom_text_value2', 'data' => 'custom_text_value2'],
            'has_expenses' => ['name' => 'has_expenses', 'data' => 'has_expenses'],
            'tax_name2' => ['name' => 'tax_name2', 'data' => 'tax_name2'],
            'tax_rate2' => ['name' => 'tax_rate2', 'data' => 'tax_rate2'],
            'client_enable_auto_bill' => ['name' => 'client_enable_auto_bill', 'data' => 'client_enable_auto_bill'],
            'is_public' => ['name' => 'is_public', 'data' => 'is_public']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'invoices';
    }
}

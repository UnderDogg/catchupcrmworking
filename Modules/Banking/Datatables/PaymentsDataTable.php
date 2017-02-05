<?php

namespace App\DataTables\Banking;

use App\Models\Banking\Payments;
use Form;
use Yajra\Datatables\Services\DataTable;

class PaymentsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'banking.payments.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $payments = Payments::query();

        return $this->applyScopes($payments);
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
            'invoice_id' => ['name' => 'invoice_id', 'data' => 'invoice_id'],
            'contact_id' => ['name' => 'contact_id', 'data' => 'contact_id'],
            'invitation_id' => ['name' => 'invitation_id', 'data' => 'invitation_id'],
            'user_id' => ['name' => 'user_id', 'data' => 'user_id'],
            'acc_gateway_id' => ['name' => 'acc_gateway_id', 'data' => 'acc_gateway_id'],
            'payment_type_id' => ['name' => 'payment_type_id', 'data' => 'payment_type_id'],
            'amount' => ['name' => 'amount', 'data' => 'amount'],
            'payment_date' => ['name' => 'payment_date', 'data' => 'payment_date'],
            'transaction_reference' => ['name' => 'transaction_reference', 'data' => 'transaction_reference'],
            'payer_id' => ['name' => 'payer_id', 'data' => 'payer_id'],
            'public_id' => ['name' => 'public_id', 'data' => 'public_id'],
            'refunded' => ['name' => 'refunded', 'data' => 'refunded'],
            'payment_status_id' => ['name' => 'payment_status_id', 'data' => 'payment_status_id'],
            'routing_number' => ['name' => 'routing_number', 'data' => 'routing_number'],
            'last4' => ['name' => 'last4', 'data' => 'last4'],
            'expiration' => ['name' => 'expiration', 'data' => 'expiration'],
            'gateway_error' => ['name' => 'gateway_error', 'data' => 'gateway_error'],
            'email' => ['name' => 'email', 'data' => 'email'],
            'payment_method_id' => ['name' => 'payment_method_id', 'data' => 'payment_method_id'],
            'bank_name' => ['name' => 'bank_name', 'data' => 'bank_name'],
            'ip' => ['name' => 'ip', 'data' => 'ip'],
            'credit_ids' => ['name' => 'credit_ids', 'data' => 'credit_ids'],
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
        return 'payments';
    }
}

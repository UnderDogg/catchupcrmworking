<?php

namespace Modules\Invoices\Repositories;

use Modules\Invoices\Models\Invoices;
use InfyOm\Generator\Common\BaseRepository;

class InvoicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'relation_id',
        'user_id',
        'invoice_status_id',
        'invoice_number',
        'discount',
        'po_number',
        'invoice_date',
        'due_date',
        'terms',
        'public_notes',
        'is_deleted',
        'is_recurring',
        'frequency_id',
        'start_date',
        'end_date',
        'last_sent_date',
        'recurring_invoice_id',
        'tax_name1',
        'tax_rate1',
        'amount',
        'balance',
        'public_id',
        'invoice_design_id',
        'invoice_type_id',
        'quote_id',
        'quote_invoice_id',
        'custom_value1',
        'custom_value2',
        'custom_taxes1',
        'custom_taxes2',
        'is_amount_discount',
        'invoice_footer',
        'partial',
        'has_tasks',
        'auto_bill',
        'custom_text_value1',
        'custom_text_value2',
        'has_expenses',
        'tax_name2',
        'tax_rate2',
        'client_enable_auto_bill',
        'is_public'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Invoices::class;
    }
}

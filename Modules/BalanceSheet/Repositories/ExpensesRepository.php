<?php

namespace App\Repositories\Balancesheet;

use App\Models\Balancesheet\Expenses;
use InfyOm\Generator\Common\BaseRepository;

class ExpensesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'relation_id',
        'vendor_id',
        'user_id',
        'invoice_id',
        'is_deleted',
        'amount',
        'exchange_rate',
        'expense_date',
        'private_notes',
        'public_notes',
        'invoice_currency_id',
        'should_be_invoiced',
        'public_id',
        'transaction_id',
        'bank_id',
        'expense_currency_id',
        'expense_category_id',
        'tax_name1',
        'tax_rate1',
        'tax_name2',
        'tax_rate2'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Expenses::class;
    }
}

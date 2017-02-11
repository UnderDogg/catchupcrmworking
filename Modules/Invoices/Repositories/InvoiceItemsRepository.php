<?php

namespace Modules\Invoices\Repositories;

use Modules\Invoices\Models\InvoiceItem;
use InfyOm\Generator\Common\BaseRepository;

class InvoiceItemsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'user_id',
        'invoice_id',
        'product_id',
        'product_key',
        'notes',
        'cost',
        'qty',
        'tax_name1',
        'tax_rate1',
        'public_id',
        'custom_value1',
        'custom_value2',
        'tax_name2',
        'tax_rate2'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InvoiceItem::class;
    }




}

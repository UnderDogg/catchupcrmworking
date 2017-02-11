<?php

namespace Modules\Invoices\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Invoice extends Model
{
    use SoftDeletes;
    use Sluggable;

    public $table = 'invoices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'relation_id' => 'integer',
        'user_id' => 'integer',
        'invoice_status_id' => 'integer',
        'invoice_number' => 'string',
        'discount' => 'float',
        'po_number' => 'string',
        'invoice_date' => 'date',
        'due_date' => 'date',
        'terms' => 'string',
        'public_notes' => 'string',
        'frequency_id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'last_sent_date' => 'date',
        'recurring_invoice_id' => 'integer',
        'tax_name1' => 'string',
        'public_id' => 'integer',
        'invoice_design_id' => 'integer',
        'quote_id' => 'integer',
        'quote_invoice_id' => 'integer',
        'invoice_footer' => 'string',
        'custom_text_value1' => 'string',
        'custom_text_value2' => 'string',
        'tax_name2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}

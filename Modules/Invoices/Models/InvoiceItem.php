<?php

namespace Modules\Invoices\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class InvoiceItem extends Model
{
    use SoftDeletes;
    use Sluggable;

    public $table = 'invoices__items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'user_id' => 'integer',
        'invoice_id' => 'integer',
        'product_id' => 'integer',
        'product_key' => 'string',
        'notes' => 'string',
        'tax_name1' => 'string',
        'public_id' => 'integer',
        'custom_value1' => 'string',
        'custom_value2' => 'string',
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

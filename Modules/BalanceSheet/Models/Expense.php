<?php

namespace App\Models\Balancesheet;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Expense extends Model
{
    use SoftDeletes;
    use Sluggable;

    public $table = 'expenses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'relation_id' => 'integer',
        'vendor_id' => 'integer',
        'user_id' => 'integer',
        'invoice_id' => 'integer',
        'expense_date' => 'date',
        'private_notes' => 'string',
        'public_notes' => 'string',
        'invoice_currency_id' => 'integer',
        'public_id' => 'integer',
        'transaction_id' => 'string',
        'bank_id' => 'integer',
        'expense_currency_id' => 'integer',
        'expense_category_id' => 'integer',
        'tax_name1' => 'string',
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

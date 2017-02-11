<?php

namespace App\Models\Banking;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes;

    public $table = 'banks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'company_id',
        'relation_id',
        'invoice_id',
        'contact_id',
        'invitation_id',
        'user_id',
        'acc_gateway_id',
        'payment_type_id',
        'amount',
        'payment_date',
        'transaction_reference',
        'payer_id',
        'public_id',
        'refunded',
        'payment_status_id',
        'routing_number',
        'last4',
        'expiration',
        'gateway_error',
        'email',
        'payment_method_id',
        'bank_name',
        'ip',
        'credit_ids',
        'is_deleted'
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
        'invoice_id' => 'integer',
        'contact_id' => 'integer',
        'invitation_id' => 'integer',
        'user_id' => 'integer',
        'acc_gateway_id' => 'integer',
        'payment_type_id' => 'integer',
        'payment_date' => 'date',
        'transaction_reference' => 'string',
        'payer_id' => 'string',
        'public_id' => 'integer',
        'payment_status_id' => 'integer',
        'routing_number' => 'integer',
        'expiration' => 'date',
        'gateway_error' => 'string',
        'email' => 'string',
        'payment_method_id' => 'integer',
        'bank_name' => 'string',
        'ip' => 'string',
        'credit_ids' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
